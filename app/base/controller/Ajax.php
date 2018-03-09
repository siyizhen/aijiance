<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-03-09 13:10:49
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-09 13:53:49
 */
namespace app\base\controller;
use think\Controller;

class Ajax extends Controller{
	public function getJiancedian(){
		$data=input('param.');
		$pageSize=config('pageSize');
		$page=$data['page'];
		$latitude=$data['latitude'];
		$longitude=$data['longitude'];

		$where=[];
		if(!empty($data['province'])&&!empty($data['city'])){
			$where['province']=$data['province'];
			$where['city']=$data['city'];
		}
		$rows=db('jiancedian',[],false)->where($where)->field([
			"($longitude-longitude)*($longitude-longitude)+($latitude-latitude)*($latitude-latitude)"=>'distance',
			'id'=>'id',
			'name'=>'name',
			'is_recommend'=>'is_recommend',
			'address'=>'address'
		])->order('is_recommend,distance asc')->page($page,$pageSize)->select();
		if(!empty($rows)){
			$arr=['status'=>1,'data'=>$rows];
		}else{
			$arr=['status'=>0];
		}
		return json($arr);
	}
}