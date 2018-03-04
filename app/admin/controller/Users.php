<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
use app\admin\model\Users as UsersModel;
class Users extends Common{
    //会员列表
    public function index(){
        if(request()->isPost()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');

            $key=input('post.key');
            $quxiang = input('post.quxiang');
            $xueli = input('param.xueli');
            $zhiye = input('param.zhiye');
            $reg_time = input('param.reg_time');
            $birthday = input('param.birthday');

            if(!empty($key)){
                $where['u.username']=['like',"%$key%"];
            }

            if(!empty($quxiang)){
                $where['u.quxiang']=$quxiang;
            }

            if(!empty($xueli)){
                $where['u.xueli']=$xueli;
            }

            if(!empty($zhiye)){
                $where['u.zhiye']=$zhiye;
            }

            if(!empty($reg_time)){
                $reg_timeArr=explode(' - ',$reg_time);
                $reg_time_start=strtotime($reg_timeArr[0]);
                $reg_time_end=strtotime($reg_timeArr[1]);
                $reg_time_end=$reg_time_end+3600*24-1;
                $where['u.reg_time']=array('between',"$reg_time_start,$reg_time_end");
            }

            if(!empty($birthday)){
                $birthdayArr=explode(' - ',$birthday);
                $birthday_start=strtotime($birthdayArr[0]);
                $birthday_end=strtotime($birthdayArr[1]);
                $birthday_end=$birthday_end+3600*24-1;
                $where['u.birthday']=array('between',"$birthday_start,$birthday_end");
            }

            $list=db('users')->alias('u')
                ->join(config('database.prefix').'user_level ul','u.level = ul.level_id','left')
                ->field('u.*,ul.level_name')
                ->where($where)
                ->order('u.id desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['reg_time'] = date('Y-m-d H:s',$v['reg_time']);
                $list['data'][$k]['last_login'] = date('Y-m-d H:s',$v['last_login']);
                $list['data'][$k]['birthday'] = empty($v['birthday'])?'':date('Y-m-d',$v['birthday']);
                $list['data'][$k]['indexs'] = ($page-1)*$pageSize+($k+1);
                $list['data'][$k]['xueli']=empty($v['xueli'])?'':getXueLi($v['xueli']);
                $list['data'][$k]['zhiye']=empty($v['zhiye'])?'':getZhiYe($v['zhiye']);
                $list['data'][$k]['quxiang']=empty($v['quxiang'])?'':getQuXiang($v['quxiang']);
                $list['data'][$k]['sex']=getSex($v['sex']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }
        return $this->fetch();
    }
    public function edit($id=''){
        if(request()->isPost()){
            $user = db('users');
            $data = input('post.');
            $level =explode(':',$data['level']);
            $data['level'] = $level[1];
            $data['birthday']=strtotime($data['birthday']);
            if ($user->update($data)!==false) {
                $result['msg'] = '会员修改成功!';
                $result['url'] = url('index');
                $result['code'] = 1;
            } else {
                $result['msg'] = '会员修改失败!';
                $result['code'] = 0;
            }
            return $result;
        }else{
            $user_level=db('user_level')->order('sort')->select();
            $info = UsersModel::get($id);
            $info->birthday=empty($info->birthday)?'':date('Y-m-d',$info->birthday);
            $this->assign('userInfo',json_decode($info,true));
            $this->assign('info',json_encode($info,true));
            $this->assign('title',lang('edit').lang('user'));
            $this->assign('user_level',json_encode($user_level,true));
            return $this->fetch();
        }
    }


    public function getRegion(){
        $Region=db("region");
        $pid = input("pid");
        $arr = explode(':',$pid);
        $map['pid']=$arr[1];
        $list=$Region->where($map)->select();
        return $list;
    }

    public function usersDel(){
        db('users')->delete(['id'=>input('id')]);
        return $result = ['code'=>1,'msg'=>'删除成功!'];
    }
    public function delall(){
        $map['id'] =array('in',input('param.ids/a'));
        db('users')->where($map)->delete();

        $result['msg'] = '删除成功！';
        $result['code'] = 1;
        $result['url'] = url('index');
        return $result;
    }

    /***********************************会员组***********************************/
    public function userGroup(){
        if(request()->isPost()){
            $userLevel=db('user_level');
            $list=$userLevel->order('sort')->select();
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list,'rel'=>1];
        }
        return $this->fetch();
    }
    public function groupAdd(){
        if(request()->isPost()){
            $data = input('post.');
            $data['open'] = input('post.open') ? input('post.open') : 0;
            db('user_level')->insert($data);
            $result['msg'] = '会员组添加成功!';
            $result['url'] = url('userGroup');
            $result['code'] = 1;
            return $result;
        }else{
            $this->assign('title',lang('add')."会员组");
            $this->assign('info','null');
            return $this->fetch('groupForm');
        }
    }
    public function groupEdit(){
        if(request()->isPost()) {
            $data = input('post.');
            db('user_level')->update($data);
            $result['msg'] = '会员组修改成功!';
            $result['url'] = url('userGroup');
            $result['code'] = 1;
            return $result;
        }else{
            $map['level_id'] = input('param.level_id');
            $info = db('user_level')->where($map)->find();
            $this->assign('title',lang('edit')."会员组");
            $this->assign('info',json_encode($info,true));
            return $this->fetch('groupForm');
        }
    }
    public function groupDel(){
        $level_id=input('level_id');
        if (empty($level_id)){
            return ['code'=>0,'msg'=>'会员组ID不存在！'];
        }
        db('user_level')->where(array('level_id'=>$level_id))->delete();
        return ['code'=>1,'msg'=>'删除成功！'];
    }
    public function groupOrder(){
        $userLevel=db('user_level');
        $data = input('post.');
        $userLevel->update($data);
        $result['msg'] = '排序更新成功!';
        $result['url'] = url('userGroup');
        $result['code'] = 1;
        return $result;
    }

    //消息短信发送
    public function sendMsg(){
        if(request()->isAjax()){
            $data=input('param.');
            unset($data['file']);
            $idArr=$userRows=$phoneArr=[];
            if(empty($data['idStr'])){
                $userRows=db('users')->field('id,username')->select();
                foreach ($userRows as $k => $v) {
                    array_push($idArr,$v['id']);
                }
            }else{
                $idArr=explode(',',$data['idStr']);
                if($data['type']=='sms'){
                    $userRows=db('users')->field('id,username')->where('id','in',$idArr)->select();
                }
            }

            $insertArr=[];
            if($data['type']=='sms'){
                $sendData['codeTemplate']=getCodeTemplate($data['code_template']);
                foreach ($userRows as $k => $v) {
                    $sendData['params']=['name'=>$v['username']];
                    $sendData['phone']=$v['username'];
                    $resObj=sendSms($sendData);
                    if($resObj->Code=='OK'){
                        $insertArr[$k]['title']=$data['title'];
                        $insertArr[$k]['content']=$data['content'];
                        $insertArr[$k]['userid']=$v['id'];
                        $insertArr[$k]['addtime']=time();
                        $insertArr[$k]['type']=$data['type'];
                        $insertArr[$k]['code_template']=$sendData['codeTemplate'];
                    }
                }
            }else{
                foreach ($idArr as $k => $v) {
                    $insertArr[$k]['title']=$data['title'];
                    $insertArr[$k]['content']=$data['content'];
                    $insertArr[$k]['userid']=$v;
                    $insertArr[$k]['addtime']=time();
                    $insertArr[$k]['type']=$data['type'];
                }
            }
        
            $res=db('send_msg')->insertAll($insertArr);
            if($res){
                $arr=['status'=>1,'msg'=>'发送成功！'];
            }else{
                $arr=['status'=>0,'msg'=>'发送失败！'];
            }
            return json($arr);
        }else{
            return $this->fetch();
        }
    }



}