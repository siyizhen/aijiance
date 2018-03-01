<?php
namespace app\user\controller;
use think\Input;
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

    public function myOrder(){
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