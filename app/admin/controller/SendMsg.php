<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
class SendMsg extends Common{
	public function index(){
		if(request()->isAjax()){
			$page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');

            $key=input('post.key');
            $type = input('post.type');
            $is_read = input('param.is_read');
            $addtime = input('param.addtime');

            if(!empty($key)){
                $where['u.username|msg.title|msg.content']=['like',"%$key%"];
            }

            if(!empty($type)){
                $where['msg.type']=$type;
            }

            if(!empty($is_read)){
                $where['msg.is_read']=$is_read;
            }

            if(!empty($addtime)){
                $addtimeArr=explode(' - ',$addtime);
                $addtime_start=strtotime($addtimeArr[0]);
                $addtime_end=strtotime($addtimeArr[1]);
                $addtime_end=$addtime_end+3600*24-1;
                $where['msg.addtime']=array('between',"$addtime_start,$addtime_end");
            }

            $list=db('users')->alias('u')
                ->join(config('database.prefix').'send_msg msg','u.id=msg.userid','left')
                ->field('msg.*,u.username')
                ->where($where)
                ->order('msg.addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['addtime'] = date('Y-m-d H:s',$v['addtime']);
                $list['data'][$k]['indexs'] = ($page-1)*$pageSize+($k+1);
                $list['data'][$k]['type']=getMsgType($v['type']);
                $list['data'][$k]['is_read']=getIsRead($v['is_read']);
                $list['data'][$k]['content']=str_cut($v['content'],30);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
		}else{
			return $this->fetch();
		}
	}

	public function edit(){
        if(request()->isPost()) {
            $data = input('post.');
            db('send_msg')->update($data);
            $result['status'] = 1;
            $result['msg'] = '修改成功!';
            $result['url'] = url('index');
            return $result;
        }else{
            $id=input('id');
            $info=db('send_msg')->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->assign('title',lang('edit').'消息/短信');
            return $this->fetch('form');
        }
    }
    public function del(){
        db('send_msg')->where(array('id'=>input('id')))->delete();
        return ['code'=>1,'msg'=>'删除成功！'];
    }
    public function delall(){
        $map['id'] =array('in',input('param.ids/a'));
        db('send_msg')->where($map)->delete();
        $result['msg'] = '删除成功！';
        $result['code'] = 1;
        $result['url'] = url('index');
        return $result;
    }
}