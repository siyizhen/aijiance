<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 17:27:43
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-08 13:43:48
 */
namespace app\home\controller;
use think\Controller;
class Order extends Controller{
    protected $userid,$whereIs;
    public function _initialize(){
        $this->userid=session('user.id');
        $this->whereIs=whereIs();
    	if (!$this->userid) {
    		if(request()->isAjax()){
    			$arr=['status'=>0,'msg'=>'请先登录！','url'=>url('user/login/index')];
    			json($arr)->send();exit;
	    	}else{
	    		$this->redirect(url('user/login/index',['sence'=>input('param.sence')]).'?preferUrl='.input('param.preferUrl'));
	    	}
        }

        //判断是否完善基本信息
        $ziliao_success=db('users',[],false)->where('id',$this->userid)->value('ziliao_success');
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
        $userid=$this->userid;
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
            'process'=>array('neq',6),
            'order_status'=>1 //正常单 取消单可不计
        ];
        $nums=db('main_order',[],false)->where($where)->count('id');
        if($nums>0){
            $arr=['status'=>0,'msg'=>'请先完成上次订单申请！','url'=>url('user/index/myOrder')];
            return json($arr);
        }
        $data['addtime']=time();
        $data['userid']=$userid;
        $data['money']=config('money');
        $res=db('main_order',[],false)->insert($data);
        if($res){
            $arr=['status'=>1,'msg'=>'订单确认成功，请支付邮费！','url'=>url('pay')];
        }else{
            $arr=['status'=>0,'msg'=>'系统繁忙，请稍候再试！','url'=>''];
        }
        return json($arr);
    }

    public function mobileReagent(){
        $commonM=model('base/base');
        $youjidianArr=$commonM->getLastVctArr(config('role_root'));
        $youjidianArr=db('role',[],false)->where('id','in',$youjidianArr)->field('name,id')->select();
        $this->assign('youjidianArr',$youjidianArr);

        $province = db('Region')->where(array('pid'=>1))->select();
        $this->assign('province',$province);

        $this->assign('controller',request()->controller());
        return $this->fetch($this->whereIs.'/'.'reagent_require');
    }

    public function pay(){

    }
}