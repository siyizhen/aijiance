<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-02-26 16:42:59
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-26 16:44:31
 */
namespace app\base\controller;
use think\Controller;

class Base extends Controller{
	public function getRegion(){
        $Region=db("region");
        $map['pid']=input("pid");
        $map['type']=input("type");
        $list=$Region->where($map)->select();
        return json($list);
    }
}