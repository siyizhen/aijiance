<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 17:27:43
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-27 16:19:39
 */
namespace app\home\controller;
use think\Controller;
class Order extends Controller{
    public function _initialize(){
    	if (!session('user.id')) {
    		if(request()->isAjax()){
    			$arr=['status'=>0,'msg'=>'请先登录！','url'=>url('user/login/index')];
    			json($arr)->send();exit;
	    	}else{
	    		$this->redirect('user/login/index');
	    	}
        }

        //判断是否完善基本信息
        $ziliao_success=db('users',[],false)->where('id',session('user.id'))->value('ziliao_success');
        if($ziliao_success==0){
            $arr=['status'=>0,'msg'=>'申请免费试剂需要您先完善基本资料！','url'=>url('user/index/myInfo')];
            json($arr)->send();exit;
        }
    }


}