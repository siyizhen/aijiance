<?php
namespace app\user\controller;
use think\Input;
use think\Controller;
use clt\Leftnav;
class Common extends Controller{
    protected $userInfo,$whereIs;
    public function _initialize(){
        $this->whereIs=whereIs();
        if($this->whereIs=='wechat'){
            exit;
        }

        $this->userInfo=db('users')->alias('u')
            ->join(config('database.prefix').'user_level ul','u.level = ul.level_id','left')
            ->where(['u.id'=>session('user.id')])
            ->field('u.*,ul.level_name')
            ->find();
        $this->assign('userInfo',$this->userInfo);

        $sys = F('System');
        $this->assign('sys',$sys);

        //导航
        $category = db('category');
        $thisCat = $category->where('id',input('catId'))->find();
        $this->assign('title',$thisCat['title']);
        $this->assign('keywords',$thisCat['keywords']);
        $this->assign('description',$thisCat['description']);
        define('DBNAME',strtolower($thisCat['module']));
        $this->pagesize = $thisCat['pagesize']>0 ? $thisCat['pagesize'] : '';
        // 获取缓存数据
        $cate = cache('cate');
        if(!$cate){
            $column_one = $category->where(['parentid'=>0,'ismenu'=>1])->order('listorder')->select();
            $column_two = $category->where(['ismenu'=>1])->order('listorder')->select();;
            $tree = new Leftnav ();
            $cate = $tree->index_top($column_one,$column_two);
            cache('cate', $cate, 3600);
        }
        $this->assign('category',$cate);
    }
    public function _empty(){
        return $this->error('空操作，返回上次访问页面中...');
    }
    //退出登陆
    public function logout(){
        session('user',null);
        $this->redirect('login/index');
    }
}