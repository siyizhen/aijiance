<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-03-06 14:31:39
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-06 17:58:37
 */
namespace app\home\controller;
class Baoxian extends Common{
	protected $userid,$baseC;
	public function _initialize(){
		parent::_initialize();
		$this->userid=session('user.id');
		$this->baseC=controller('base/base');
	}

	public function index(){
		$rows=db('article')->where('posid',5)->select();
		$this->assign('rows',$rows);
		return $this->fetch('pc/baoxian');
	}

	public function toubao(){
		if(request()->isAjax()){
			$data=input('param.');
			dump($data);exit;
		}else{
			$rows=db('article')->where('posid',5)->select();
			$this->assign('rows',$rows);

			$start_time=strtotime(date('Y-m-d'))+3600*24;
	    	$end_time=strtotime(date('Y-m-d', strtotime("+1 year")))+3600*24-1;
	    	$this->assign('start_time',date('Y年m月d日 H:i:s',$start_time));
	    	$this->assign('end_time',date('Y年m月d日 H:i:s',$end_time));
			return $this->fetch('pc/toubao');
		}
	}
}
