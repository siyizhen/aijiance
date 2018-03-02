<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
class Message extends Common
{
    public function index(){
        if(request()->isPost()) {
            $key=input('post.key');
            $is_read=input('post.is_read');
            if(!empty($is_read)){
                $where['is_read']=$is_read;
            }
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $list = db('message')->alias('a')
                ->join(config('database.prefix') . 'users b', 'a.userid = b.id', 'left')
                ->where('a.user_content|a.answer_content|b.username', 'like', "%" . $key . "%")
                ->where($where)
                ->field('a.id as message_id,a.*,b.username')
                ->order('a.user_addtime asc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['user_addtime'] = date('Y-m-d H:i:s',$v['user_addtime']);
                $list['data'][$k]['indexs'] = ($page-1)*$pageSize+($k+1);
                if(!empty($v['answer_time'])){
                    $list['data'][$k]['answer_time'] = date('Y-m-d H:i:s',$v['answer_time']);
                }
                $list['data'][$k]['is_read'] = getIsRead($v['is_read']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }
        return $this->fetch();
    }
    //删除留言
    public function del(){
        $map['id']=input('message_id');
        db('message')->where($map)->delete();
        return $result = ['code'=>1,'msg'=>'删除成功!'];
    }

    public function delall(){
        $map['id'] =array('in',input('param.ids/a'));
        db('message')->where($map)->delete();
        $result['msg'] = '删除成功！';
        $result['code'] = 1;
        $result['url'] = url('index');
        return $result;
    }

    public function answerMessage(){
        if(request()->isAjax()){
            $data=input('param.');
            $data['answer_time']=time();
            $data['is_read']=2;
            $res=db('message')->where('id',$data['id'])->update($data);
            if($res){
                $arr=['status'=>1,'msg'=>'已回复！'];
            }else{
                $arr=['status'=>0,'msg'=>'回复失败！'];
            }
            return json($arr);
        }else{
            return $this->fetch('answer_message');
        }
    }
}