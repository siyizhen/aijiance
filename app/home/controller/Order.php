<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 17:27:43
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-01 16:31:02
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

    public function add(){
        $data=input('param.');
        if(empty($data['youjidian'])){
            $arr=['status'=>0,'msg'=>'请选择邮寄点！','url'=>''];
            return json($arr);
        }
        if(empty($data['shoujianren'])){
            $arr=['status'=>0,'msg'=>'请输入收件人！','url'=>''];
            return json($arr);
        }
        if(empty($data['getphone'])){
            $arr=['status'=>0,'msg'=>'请输入正确的手机号！','url'=>''];
            return json($arr);
        }
        if(empty($data['province'])){
            $arr=['status'=>0,'msg'=>'请选择省份！','url'=>''];
            return json($arr);
        }
        if(empty($data['city'])){
            $arr=['status'=>0,'msg'=>'请选择城市！','url'=>''];
            return json($arr);
        }
        if(empty($data['district'])){
            $arr=['status'=>0,'msg'=>'请选择区县！','url'=>''];
            return json($arr);
        }
        if(empty($data['address'])){
            $arr=['status'=>0,'msg'=>'请输入详细地址！','url'=>''];
            return json($arr);
        }
        if(empty($data['payway'])){
            $arr=['status'=>0,'msg'=>'请输入详细地址！','url'=>''];
            return json($arr);
        }
        $userid=session('user.id');
        //判断是否已添加收货地址
        $nums=db('address',[],false)->where('userid',$userid)->count('id');
        $addressArr=[
            'province'=>$data['province'],
            'city'=>$data['city'],
            'district'=>$data['district'],
            'address'=>$data['address'],
            'userid'=>$userid
        ];
        if($nums>0){
            db('address',[],false)->where('userid',$userid)->update($addressArr);
        }else{
            db('address',[],false)->insert($addressArr);
        }
        //判断是否有未完成的订单
        $where=[
            'userid'=>$userid,
            'process'=>array('neq',6)
        ];
        $nums=db('main_order',[],false)->where($where)->count('id');
        if($nums>0){
            $arr=['status'=>0,'msg'=>'请先完成上次订单申请！','url'=>url('user/index/myOrder')];
            return json($arr);
        }
        $data['addtime']=time();
        $data['userid']=$userid;
        $res=db('main_order',[],false)->insert($data);
        if($res){
            $arr=['status'=>1,'msg'=>'订单确认成功！','url'=>url('pay')];
        }else{
            $arr=['status'=>0,'msg'=>'系统繁忙，请稍候再试！','url'=>''];
        }
        return json($arr);
    }

    public function pay(){

    }
}