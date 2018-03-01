<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 16:42:59
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-01 18:08:33
 */
namespace app\base\controller;
use think\Controller;

class Base extends Controller{
	//获取省市信息
	public function getRegion(){
        $Region=db("region");
        $map['pid']=input("pid");
        $map['type']=input("type");
        $list=$Region->where($map)->select();
        return json($list);
    }

    //获取验证码
    public function getCode($type,$length=4){
    	$min=(int)('1'.str_repeat('0',$length-1));
    	$max=(int)(str_repeat('9',$length));
    	$code=mt_rand($min,$max);
    	$data=input('param.');

        $data['params']=['code'=>$code];
    	if($data['type']=='login'){
    		$num=db('users')->where('username',$data['phone'])->count('id');
    		if($num>0){
    			$data['codeTemplate']=config('codeTemplate.login');
    		}else{
    			$data['codeTemplate']=config('codeTemplate.register');
    		}
    	}elseif($data['type']=='change_phone'){
            $data['phone']=session('user.username');
            $data['codeTemplate']=config('codeTemplate.change_phone');
        }elseif($data['type']=='new_phone'){
            $data['codeTemplate']=config('codeTemplate.new_phone');
        }
    	$resObj=sendSms($data);
    	if($resObj->Code=='OK'){
            //缓存验证码
            cache($data['type'].'_'.$data['phone'],$code,config('cacheTime.'.$data['type']));
    		$arr=['status'=>1,'msg'=>'验证码发送成功！请注意查收！'];
    	}else{
    		$arr=['status'=>0,'msg'=>'系统繁忙，请稍后再试！'];
    	}
    	return json($arr);
    }
}