<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 17:27:43
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-26 17:38:38
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
    }


}