<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 17:27:43
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-07 12:59:13
 */
namespace app\home\controller;
use think\Controller;
class Question extends Controller{
	protected $userid,$baseC,$whereIs;
	public function _initialize(){
		$this->whereIs=whereIs();
        if($this->whereIs=='wechat'){
            exit;
        }
		$this->userid=session('user.id');
		$this->baseC=controller('base/base');
	}

    public function question(){
        if(request()->isPost()){
        	if (!$this->userid) {
        		$param=[
		            'type'=>'error',
		            'msg'=>'请先登录！',
		            'wait'=>5,
		            'url'=>url('user/login/index'),
		        ];
	    		return $this->baseC->showMessage($this->whereIs,$param);
	        }
        	
        	$data=input('param.');
	        $arr['questionnaire_id']=$data['questionnaire_id'];
	        unset($data['questionnaire_id']);
	        $arrs=[];
	        foreach ($data as $k => $v) {
	            $key=substr($k,6);
	            if(is_array($v)){
	                $arrs[$key]=implode(',',$v);
	            }else{
	                $arrs[$key]=$v;
	            }
	        }
	        $arr['reply']=json_encode((object)$arrs);
	        $arr['userid']=$this->userid;
	        $arr['addtime']=time();
	        $where=[
	        	'userid'=>$this->userid,
	        	'questionnaire_id'=>$arr['questionnaire_id']
	        ];
	        $num=db('reply',[],false)->where($where)->count('id');
	        if($num){
	            $res=db('reply',[],false)->where($where)->update($arr);
	        }else{
	            $res=db('reply',[],false)->insert($arr);
	        }
	        if($res){
	        	$param=[
		            'type'=>'success',
		            'msg'=>'提交成功，感谢您的支持~',
		            'wait'=>5,
		            'url'=>url('user/index/myQuestionnaire'),
		        ];
	        }else{
	        	$param=[
		            'type'=>'error',
		            'msg'=>'系统繁忙，请稍后再试！',
		            'wait'=>5,
		            'url'=>url('home/question/question'),
		        ];
	        }
	    	return $this->baseC->showMessage($this->whereIs,$param);
        }else{
        	$rows=db('questions',[],false)->alias('a')->join('__QUESTIONNAIRES__ b','a.questionnaire_id=b.id')->where('b.is_use',2)->field('a.id as question_id,a.*,b.*')->order('sort asc')->select();
	        foreach ($rows as $k => $v) {
	            $rows[$k]['optionsList']=json_decode($v['options'],true);
	        }
	        $this->assign('questions',$rows);
	        return $this->fetch($this->whereIs.'/'.'question');
        }
    }
}