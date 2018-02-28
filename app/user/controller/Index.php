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
}