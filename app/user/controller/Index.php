<?php
namespace app\user\controller;
use think\Input;
use think\Db;
class Index extends Common{
    public function _initialize(){
        parent::_initialize();
        if (!session('user.id')) {
            $this->redirect('login/index');
        }
    }
    public function index(){
        $this->assign('title','会员中心');
        return $this->fetch();
    }
    public function myInfo(){
        if(request()->isAjax()){
            $data=input('param.');
            if(empty($data['birthday'])){
                return json(['status'=>0,'msg'=>'请选择您的生日！']);
            }
            if(empty($data['quxiang'])){
                return json(['status'=>0,'msg'=>'请选择性取向！']);
            }
            if(empty($data['xueli'])){
                return json(['status'=>0,'msg'=>'请选择学历情况！']);
            }
            if(empty($data['zhiye'])){
                return json(['status'=>0,'msg'=>'请选择您的职业！']);
            }
            $data['birthday']=strtotime($data['birthday']);
            $data['ziliao_success']=1;
            $res=db('users')->where('id',session('user.id'))->update($data);
            if($res){
                if(!empty(input('param.preferUrl'))){
                    $arr=['status'=>1,'msg'=>'保存成功！','url' =>input('param.preferUrl')];
                }else{
                    $arr=['status'=>1,'msg'=>'保存成功！','url'=>''];
                }
            }else{
                $arr=['status'=>0,'msg'=>'编辑失败！'];
            }
            return json($arr);
        }else{
            $info=db('users')->where('id',session('user.id'))->find();
            $this->assign('info',$info);
            return $this->fetch('pc/my_info');
        }
    }

    public function myAddress(){
        if(request()->isAjax()){
            $data=input('param.');
            $res=db('address')->where('userid',session('user.id'))->update($data);
            if($res){
                $arr=['status'=>1,'msg'=>'保存成功！','url'=>''];
            }else{
                $arr=['status'=>0,'msg'=>'编辑失败！'];
            }
            return json($arr);
        }else{
            $province = db('Region')->where(array('pid'=>1))->select();
            $this->assign('province',$province);

            $address=db('address')->where('userid',session('user.id'))->find();
            $this->assign('address',$address);
            return $this->fetch('pc/my_address');
        }
    }

    public function myOrder(){
        $where=[
            'userid'=>session('user.id')
        ];
        $list = Db::table(config('database.prefix') . 'main_order')->alias('a')
            ->join(config('database.prefix') . 'role b', 'a.youjidian = b.id', 'left')
            ->field('a.*,b.name as youjidian')
            ->where($where)
            ->order('a.addtime desc')
            ->paginate(config('pageSize'))->each(function($v, $k){
                $v['pay_status']=getPayStatus($v['pay_status']);
                $v['origin_payway']=$v['payway'];
                $v['payway']=getPayWay($v['payway']);
                $v['origin_shipping_status']=$v['shipping_status'];
                $v['shipping_status']=getshippingStatus($v['shipping_status']);
                $v['origin_process']=$v['origin_process'];
                $v['process']=getProcess($v['process']);
                $v['origin_order_status']=$v['order_status'];
                $v['order_status']=getOrderStatus($v['order_status']);
                return $v;
            });
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch('pc/my_order');
    }

    public function changePhone(){
        if(request()->isAjax()){
            $data=input('param.');
            $code=input('param.code');
            if(!cache($data['type'].'_'.session('user.username'))){
                return array('code' => 0, 'msg' => '验证码已过期！');
            }
            if(cache($data['type'].'_'.session('user.username'))!=$code){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            cache($data['type'].'_'.session('user.username'),NULL);
            return json(['status'=>1,'url'=>url('newPhone')]);
        }else{  
            return $this->fetch('pc/change_phone');
        }
    }

    public function newPhone(){
        if(request()->isAjax()){
            $data=input('param.');
            $code=input('param.code');
            if(!cache($data['type'].'_'.$data['phone'])){
                return array('code' => 0, 'msg' => '验证码已过期！');
            }
            if(cache($data['type'].'_'.$data['phone'])!=$code){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            cache($data['type'].'_'.$data['phone'],NULL);
            $updateArr['username']=$data['phone'];
            $res=db('users')->where('id',session('user.id'))->update($updateArr);
            if($res){
                //变更session信息
                session('user.username',$data['phone']);
                $arr=['status'=>1,'msg'=>'修改成功!'];
            }else{
                $arr=['status'=>0,'msg'=>'系统繁忙，请稍候再试！'];
            }
            return json($arr);
        }else{  
            return $this->fetch('pc/new_phone');
        }
    }
}