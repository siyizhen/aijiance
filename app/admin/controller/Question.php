<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-01-05 14:01:02
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-03-05 22:16:40
 */
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
use tree\Tree;

class Question extends Common{
    public function _initialize(){
        parent::_initialize();
    }

    public function questionnaire(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');

            $list = Db::table(config('database.prefix') . 'questionnaires')
                ->order('addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['index']=($page-1)*$pageSize+($k+1);
                $list['data'][$k]['origin_is_use']=$v['is_use'];
                $list['data'][$k]['addtime']=date('Y-m-d',$v['addtime']);
                $list['data'][$k]['is_use']=getIsUse($v['is_use']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total']];
        }
        return $this->fetch();
    }

    public function questionnaireAdd(){
        if(request()->isPost()){
            $data = input('post.');
            $data['addtime'] = time();
            db('questionnaires',[],false)->insert($data);
            $result['code'] = 1;
            $result['msg'] = '问卷添加成功!';
            $result['url'] = url('questionnaireAdd');
            return $result;
        }else{
            $this->assign('title',lang('add').lang('questionnaire'));
            $this->assign('info',NULL);

            return $this->fetch('questionnaire_form');
        }
    }

    public function questionnaireEdit(){
        if(request()->isPost()) {
            $data = input('post.');
            db('questionnaires',[],false)->update($data);
            $result['code'] = 1;
            $result['msg'] = '问卷修改成功!';
            $result['url'] = url('questionnaire');
            return $result;
        }else{
            $id=input('id');
            $info=db('questionnaires',[],false)->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->assign('title',lang('edit').lang('questionnaire'));
            return $this->fetch('questionnaire_form');
        }
    }

    public function questionnaireDel(){
        //查询该问卷是否有问题
        $nums=db('questions',[],false)->where('questionnaire_id',input('param.id'))->count('id');
        if($nums){
            return ['code'=>0,'msg'=>'请先删除该问题下面的所有题目！'];
        }
        db('questionnaires')->where(array('id'=>input('id')))->delete();
        return ['code'=>1,'msg'=>'删除成功！'];
    }

    public function questionnaireSetDefault(){
        $act=input('param.act');
        $id=input('param.id');

        if($act=='set'){
            db('questionnaires')->where(array('is_use'=>2))->update(['is_use'=>1]);
            db('questionnaires')->where(array('id'=>input('id')))->update(['is_use'=>2]);
            return ['code'=>1,'msg'=>'设置应用成功！'];
        }else{
            db('questionnaires')->where(array('id'=>input('id')))->update(['is_use'=>1]);
            return ['code'=>1,'msg'=>'取消应用成功！'];
        }
    }

    public function question(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $questionnaire_id=input('param.questionnaire_id');

            $list = Db::table(config('database.prefix') . 'questions')
                ->where('questionnaire_id',$questionnaire_id)
                ->order('sort asc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['index']=($page-1)*$pageSize+($k+1);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total']];
        }
        return $this->fetch();
    }

    public function questionAdd(){
        if(request()->isPost()){
            $data = input('post.');
            unset($data['question_type']);
            db('questions',[],false)->insert($data);
            $result['code'] = 1;
            $result['msg'] = '问题添加成功!';
            $result['url'] = url('questionAdd');
            return $result;
        }else{
            $questionnaire_id=input('param.questionnaire_id');
            $sort=db('questions',[],false)->where('questionnaire_id',$questionnaire_id)->count('id');
            if(!empty($sort)){
                $sort=$sort+1;
            }
            $this->assign('sort',$sort);
            $this->assign('title',lang('add').lang('question'));
            return $this->fetch('question_add');
        }
    }

    public function questionEdit(){
        $id=input('param.id');
        if(request()->isPost()){
            $data = input('post.');
            unset($data['question_type']);
            db('questions',[],false)->where('id',$id)->update($data);
            $result['code'] = 1;
            $result['msg'] = '问题编辑成功!';
            $result['url'] = url('question');
            return $result;
        }else{
            $this->assign('title',lang('edit').lang('question'));
            $info=db('questions',[],false)->where('id',$id)->find();
            $this->assign('info', $info);
            $this->assign('optionsList', json_decode($info['options'], true));
            return $this->fetch('question_edit');
        }
    }

    public function questionDel(){
        db('questions')->where(array('id'=>input('id')))->delete();
        return ['code'=>1,'msg'=>'删除成功！'];
    }

    public function delAllQuestion(){
        $map['id'] =array('in',input('param.ids/a'));
        
        db('questions',[],false)->where($map)->delete();
        $result['msg'] = '批量删除成功！';
        $result['code'] = 1;
        $result['url'] = url('questions');
        return $result;
    }

    public function tongJi(){
        $questionnaire_id=input('param.questionnaire_id');
        $info=db('questionnaires')->where('id',$questionnaire_id)->find();

        $questions=db('questions',[],false)->where('questionnaire_id',$questionnaire_id)->select();
        $rows=[];
        foreach ($questions as $k => $v) {
            $questions[$k]['optionsList']=json_decode($v['options'],true);
            foreach ($questions[$k]['optionsList'] as $m => $n) {
                $questions[$k]['optionsList'][$m]['nums']=$questions[$k]['optionsList'][$m]['per']=0;
            }
            $questions[$k]['indexs']=$k+1;
            $rows[$v['id']]=$questions[$k];
        }
        unset($questions);


        $replyRows=db('reply',[],false)->where('questionnaire_id',$questionnaire_id)->select();
        $total=count($replyRows);

        foreach ($replyRows as $k => $v) {
            $replyRows[$k]['reply']=json_decode($v['reply'],true);
            foreach ($replyRows[$k]['reply'] as $m => $n) {
                $rows[$m]['optionsList'][$n]['nums']+=1;
                $rows[$m]['optionsList'][$n]['per']+=1/$total;
            }
        }
        unset($replyRows);

        foreach ($rows as $k => $v) {
            foreach ($rows[$k]['optionsList']    as $m => $n) {
                $rows[$k]['optionsList'][$m]['per']=sprintf('%.2f',$n['per']*100);   
            }
        }
        $this->assign('info',$info);
        $this->assign('questions',$rows);
        return $this->fetch('tongji');
    }
}