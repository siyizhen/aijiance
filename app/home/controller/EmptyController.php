<?php
namespace app\home\controller;
use think\Db;
use think\Request;
use clt\Form;
use tree\Tree;
class EmptyController extends Common{
    protected  $dao,$fields;
    public function _initialize()
    {
        parent::_initialize();
        $this->dao = db(DBNAME);
    }
    public function index(){
        if(DBNAME=='page'){
            $info = $this->dao->where('id',input('catId'))->find();
            $this->assign('info',$info);
            if($info['template']){
                $template = $info['template'];
            }else{
                $info['template'] = db('category')->where('id',$info['id'])->value('template_show');
                if($info['template']){
                    $template = $info['template'];
                }else{
                    $template = DBNAME.'_show';
                }
            }
            if($template=='page_apply_reagent'){
                $commonM=model('base/base');
                $youjidianArr=$commonM->getLastVctArr(config('role_root'));
                $youjidianArr=db('role',[],false)->where('id','in',$youjidianArr)->field('name,id')->select();
                $this->assign('youjidianArr',$youjidianArr);

                $province = db('Region')->where(array('pid'=>1))->select();
                $this->assign('province',$province);
            }
            return $this->fetch($this->whereIs.'/'.$template);
        }else{
            if(DBNAME=='picture'){
                $setup = db('field')->where(array('moduleid'=>3,'field'=>'group'))->value('setup');
                $setup=is_array($setup) ? $setup: string2array($setup);
                $options = explode("\n",$setup['options']);
                foreach($options as $r) {
                    $v = explode("|",$r);
                    $k = trim($v[1]);
                    $optionsarr[$k]['val'] = $v[0];
                    $optionsarr[$k]['key'] = $k;
                }
                $this->assign('options',$optionsarr);
            }
            $map['catid'] = input('catId');
            if(DBNAME=='team'){
                $donation = db('donation')->order('id desc')->paginate($this->pagesize);
                $dpage = $donation->render();
                $dlist = $donation->toArray();
                $this->assign('dlist',$dlist['data']);
                $this->assign('dpage',$dpage);
                $list = $this->dao->where($map)->order('listorder asc,createtime desc')->select();
                foreach ($list as $k=>$v){
                    $list_style = explode(';',$v['title_style']);
                    $list[$k]['title_color'] =$list_style[0];
                    $list[$k]['title_weight'] =$list_style[1];
                    $title_thumb = $v['thumb'];
                    $list[$k]['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/portfolio-thumb/p'.($k+1).'.jpg';
                }
                $this->assign('list',$list);
            }else{
                if(DBNAME=='jiancedian'){
                    $this->assign('whereIs',$this->whereIs);

                    if(!empty(input('param.province'))&&!empty(input('param.city'))){
                        $map['a.province']=input('param.province');
                        $map['a.city']=input('param.city');
                        $nowProvince=db('Region')->where('id',input('param.province'))->value('name');
                        $nowCity=db('Region')->where('id',input('param.city'))->value('name');
                    }else{
                        $dataArr=getLocation();
                        $nowProvince=$dataArr['content']['address_detail']['province'];
                        $nowCity=$dataArr['content']['address_detail']['city'];

                        $longitude=$dataArr['content']['point']['x'];
                        $latitude=$dataArr['content']['point']['y'];
                    }
                    $list=$this->dao->alias('a')
                        ->join(config('database.prefix').'category c','a.catid = c.id','left')
                        ->where($map)
                        ->field([
                            'a.*',
                            'c.catdir'=>'catdir',
                            "($longitude-longitude)*($longitude-longitude)+($latitude-latitude)*($latitude-latitude)"=>'distance'
                        ])
                        ->order('a.is_recommend,distance asc')
                        ->paginate($this->pagesize,false,['query' => request()->param()]);

                    $province = db('Region')->where(array('pid'=>1))->select();
                    $this->assign('province',$province);
                    $this->assign('nowProvince',$nowProvince);
                    $this->assign('nowCity',$nowCity);
                    $this->assign('longitude',$longitude);
                    $this->assign('latitude',$latitude);
                }else{
                    $list=$this->dao->alias('a')
                        ->join(config('database.prefix').'category c','a.catid = c.id','left')
                        ->where($map)
                        ->field('a.*,c.catdir')
                        ->order('listorder asc,createtime desc')
                        ->paginate($this->pagesize);
                }
                // 获取分页显示
                $page = $list->render();
                $list = $list->toArray();
                foreach ($list['data'] as $k=>$v){
                    $list['data'][$k]['controller'] = $v['catdir'];
                    $list_style = explode(';',$v['title_style']);
                    $list['data'][$k]['title_color'] =$list_style[0];
                    $list['data'][$k]['title_weight'] =$list_style[1];
                    $title_thumb = $v['thumb'];
                    $list['data'][$k]['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/portfolio-thumb/p'.($k+1).'.jpg';
                }
                $this->assign('list',$list['data']);
                $this->assign('page',$page);
            }
			$cattemplate = db('category')->where('id',input('catId'))->value('template_list');
			$template =$cattemplate ? $cattemplate : DBNAME.'_list';
            return $this->fetch($this->whereIs.'/'.$template);
        }
    }
    public function info(){
        $this->dao->where('id',input('id'))->setInc('hits');
        $info = $this->dao->where('id',input('id'))->find();
        $info['pic'] = $info['pic']?__PUBLIC__.$info['pic']:__HOME__."/images/sample-images/blog-post".rand(1,3).".jpg";
        $title_style = explode(';',$info['title_style']);
        $info['title_color'] = $title_style[0];
        $info['title_weight'] = $title_style[1];
        $title_thumb = $info['thumb'];
        $info['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/sample-images/blog-post'.rand(1,3).'.jpg';
        if(DBNAME=='picture'){
            $pics = explode(':::',$info['pics']);
            foreach ($pics as $k=>$v){
                $info['pics'][$k] = explode('|',$v);
            }
        }
        if(DBNAME=='article'){
            //获取上一篇、下一篇文章  
            $map['catid'] = $info['catid'];  
            $map['id'] = array('neq',input('id'));  
            $map['listorder'] = array('elt',$info['listorder']);  
            $map['createtime'] = array('egt',$info['createtime']);  
            $info['prev'] = db('article',[],false)->where($map)->order('listorder,createtime DESC')->field('id,title,createtime,listorder')->find();  
              
            $map['listorder'] = array('egt',$info['listorder']);  
            $map['createtime'] = array('elt',$info['createtime']);  
            $info['next'] = db('article',[],false)->where($map)->order('listorder,createtime DESC')->field('id,title,createtime,listorder')->find();  
        }
        $this->assign('info',$info);
        if($info['template']){
			$template = $info['template'];
		}else{
			$cattemplate = db('category')->where('id',$info['catid'])->value('template_show');
			if($cattemplate){
				$template = $cattemplate;
			}else{
				$template = DBNAME.'_show';
			}
		}

        return $this->fetch($this->whereIs.'/'.$template);
    }
}