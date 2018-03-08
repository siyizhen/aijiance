<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-03-06 14:31:39
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-08 08:55:41
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
		return $this->fetch($this->whereIs.'/'.'baoxian');
	}

	public function toubao(){
		if(request()->isAjax()){
			$data=input('param.');
			if(!empty($data['data'])){
				$dataArr=explode('&',$data['data']);
				foreach ($dataArr as $k => $v) {
					$vArr=explode('=',$v);
					$data[$vArr[0]]=$vArr[1];
				}
			}
			unset($data['data']);
			if(empty($data['truename'])){
				$arr=['status'=>0,'msg'=>'请输入被保人姓名！','url'=>''];
				return json($arr);
			}
			if(!preg_match(config('reg.idcard'),$data['idcard'])){
				$arr=['status'=>0,'msg'=>'请输入被保人正确的身份证号！','url'=>''];
				return json($arr);
			}
			if(!preg_match(config('reg.phone'),$data['phone'])){
				$arr=['status'=>0,'msg'=>'请输入被保人正确的手机号！','url'=>''];
				return json($arr);
			}
			if(empty($data['agree'])){
				$arr=['status'=>0,'msg'=>'请认真阅读相关声明公告、条款协议后勾选！','url'=>''];
				return json($arr);
			}
			$phone = $data['phone'];
            $code = $data['code'];
            if(!cache('baoxian_'.$phone)){
                return array('code' => 0, 'msg' => '验证码已过期！','url'=>'');
            }
            if(cache('baoxian_'.$phone)!=$code){
                return array('code' => 0, 'msg' => '验证码错误','url'=>'');
            }
            cache('baoxian_'.$phone,NULL);

            if (!$this->userid) {
            	$arr=['status'=>0,'msg'=>'请先登录！','url'=>url('user/login/index')];
            	return json($arr);
            }

            //判断该被保人用户是否存在未支付的保单信息
            $where=[
            	'truename'=>$data['truename'],
            	'idcard'=>$data['idcard'],
            	'pay_status'=>1
            ];
            $nums=db('baoxian_order',[],false)->where($where)->count('id');
            if($nums){
            	$arr=['status'=>0,'msg'=>'请您存在未完成的保单！','url'=>url('user/index/myBaoxian')];
            	return json($arr);	
            }
            //判断该被保人是否存在 在保障期内的保单
            $where=[
            	'truename'=>$data['truename'],
            	'idcard'=>$data['idcard'],
            	'pay_status'=>2,
            	'start_time'=>array('lt',time()),
            	'end_time'=>array('gt',time())
            ];
            $nums=db('baoxian_order',[],false)->where($where)->count('id');
            if($nums){
            	$arr=['status'=>0,'msg'=>'您已购买的防艾险仍在保障期内，无需重复购买！','url'=>url('user/index/myBaoxian')];
            	return json($arr);	
            }

            $data['addtime']=time();
            $start_time=strtotime(date('Y-m-d'))+3600*24;
	    	$end_time=strtotime(date('Y-m-d', strtotime("+1 year")))+3600*24-1;
            $data['start_time']=$start_time;
            $data['end_time']=$end_time;
            $data['money']=config('baoxian_money');
            $data['userid']=$this->userid;
            unset($data['agree'],$data['code']);
            $id=db('baoxian_order',[],false)->insertGetId($data);
            if($id){
            	$arr=['status'=>1,'msg'=>'','data'=>serialize($data)];
            }else{
            	$arr=['status'=>0,'msg'=>'系统繁忙，请稍后再试！','url'=>''];
            }
            return json($arr);
		}else{
			if (!$this->userid) {
        		$param=[
		            'type'=>'error',
		            'msg'=>'请先登录！',
		            'wait'=>5,
		            'url'=>url('user/login/index',['sence'=>'toubao',])."?preferUrl=".request()->url(),
		        ];
	    		return $this->baseC->showMessage('pc',$param);
	        }

			$rows=db('article')->where('posid',5)->select();
			$this->assign('rows',$rows);

			$start_time=strtotime(date('Y-m-d'))+3600*24;
	    	$end_time=strtotime(date('Y-m-d', strtotime("+1 year")))+3600*24-1;
	    	$this->assign('start_time',date('Y年m月d日 H:i:s',$start_time));
	    	$this->assign('end_time',date('Y年m月d日 H:i:s',$end_time));
			return $this->fetch($this->whereIs.'/'.'toubao');
		}
	}

	public function mobileBaoxianRequire(){
		$start_time=strtotime(date('Y-m-d'))+3600*24;
    	$end_time=strtotime(date('Y-m-d', strtotime("+1 year")))+3600*24-1;
    	$this->assign('start_time',date('Y年m月d日 H:i:s',$start_time));
    	$this->assign('end_time',date('Y年m月d日 H:i:s',$end_time));
		return $this->fetch($this->whereIs.'/'.'require');
	}

	public function payment(){
		return $this->fetch($this->whereIs.'/'.'payment');
	}

	public function payResult(){
		return $this->fetch($this->whereIs.'/'.'pay_result');
	}
}
