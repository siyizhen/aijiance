<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 16:12:41
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-26 16:41:20
 */
namespace app\base\model;
use think\Model;
class Base extends Model{
	protected $vctArr=[];

    public function getVctArr($role_id){
        $rows=db('role',[],false)->field('id,pid')->where('pid',$role_id)->select();
        if(!empty($rows)){
            foreach ($rows as $k => $v) {
                array_push($this->vctArr,$v['id']);
                $this->getVctArr($v['id']);
            }
        }
    }

    public function getAllVct(){
        $this->getVctArr(config('role_root'));
        array_push($this->vctArr,config('role_root'));
        return $this->vctArr;
    }

    public function getLastVct($role_id){
        $rows=db('role',[],false)->field('id,pid')->where('pid',$role_id)->select();
        if(!empty($rows)){
            foreach ($rows as $k => $v) {
                $this->getVctArr($v['id']);
            }
        }else{
            array_push($this->vctArr,$role_id);
        }
    }

    public function getLastVctArr($role_id){
    	$this->getLastVct($role_id);
    	return $this->vctArr;
    }
}