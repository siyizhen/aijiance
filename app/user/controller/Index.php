<?php
namespace app\user\controller;
use think\Input;
use think\Db;
class Index extends Common{
    protected $userid;
    public function _initialize(){
        parent::_initialize();
        $this->userid=session('user.id');
        if (!$this->userid) {
            $this->redirect('login/index');
        }

        //获取未读的意见反馈数
        $this->assign('messageNums',db('message',[],false)->where(['userid'=>$this->userid,'is_read'=>2])->count('id'));
        $this->assign('msgNums',db('send_msg',[],false)->where(['userid'=>$this->userid,'is_read'=>2,'type'=>'msg'])->count('id'));
        $this->assign('smsNums',db('send_msg',[],false)->where(['userid'=>$this->userid,'is_read'=>2,'type'=>'sms'])->count('id'));
    }
    public function index(){
        $this->assign('title','会员中心');
        return $this->fetch();
    }
    public function myInfo(){
        if(request()->isAjax()){
            $data=input('param.');
            if(empty($data['birthday'])){
                return json(['status'=>0,'msg'=>'请选择您的生日！']);
            }
            if(empty($data['quxiang'])){
                return json(['status'=>0,'msg'=>'请选择性取向！']);
            }
            if(empty($data['xueli'])){
                return json(['status'=>0,'msg'=>'请选择学历情况！']);
            }
            if(empty($data['zhiye'])){
                return json(['status'=>0,'msg'=>'请选择您的职业！']);
            }
            $data['birthday']=strtotime($data['birthday']);
            $data['ziliao_success']=1;
            $res=db('users')->where('id',$this->userid)->update($data);
            if($res){
                if(!empty(input('param.preferUrl'))){
                    $arr=['status'=>1,'msg'=>'保存成功！','url' =>input('param.preferUrl')];
                }else{
                    $arr=['status'=>1,'msg'=>'保存成功！','url'=>''];
                }
            }else{
                $arr=['status'=>0,'msg'=>'编辑失败！'];
            }
            return json($arr);
        }else{
            $info=db('users')->where('id',$this->userid)->find();
            $this->assign('info',$info);
            return $this->fetch($this->whereIs.'/'.'my_info');
        }
    }

    public function myAddress(){
        if(request()->isAjax()){
            $data=input('param.');
            $res=db('address')->where('userid',$this->userid)->update($data);
            if($res){
                $arr=['status'=>1,'msg'=>'保存成功！','url'=>''];
            }else{
                $arr=['status'=>0,'msg'=>'编辑失败！'];
            }
            return json($arr);
        }else{
            $province = db('Region')->where(array('pid'=>1))->select();
            $this->assign('province',$province);

            $address=db('address')->where('userid',$this->userid)->find();
            $this->assign('address',$address);
            return $this->fetch($this->whereIs.'/'.'my_address');
        }
    }

    public function myOrder(){
        $where=[
            'userid'=>$this->userid
        ];
        $list = Db::table(config('database.prefix') . 'main_order')->alias('a')
            ->join(config('database.prefix') . 'role b', 'a.youjidian = b.id', 'left')
            ->field('a.*,b.name as youjidian')
            ->where($where)
            ->order('a.addtime desc')
            ->paginate(config('pageSize'))->each(function($v, $k){
                $v['pay_status']=getPayStatus($v['pay_status']);
                $v['origin_payway']=$v['payway'];
                $v['payway']=getPayWay($v['payway']);
                $v['origin_shipping_status']=$v['shipping_status'];
                $v['shipping_status']=getshippingStatus($v['shipping_status']);
                $v['origin_process']=$v['origin_process'];
                $v['process']=getProcess($v['process']);
                $v['origin_order_status']=$v['order_status'];
                $v['order_status']=getOrderStatus($v['order_status']);
                return $v;
            });
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch($this->whereIs.'/'.'my_order');
    }

    public function changePhone(){
        if(request()->isAjax()){
            $data=input('param.');
            $code=input('param.code');
            if(!cache($data['type'].'_'.session('user.username'))){
                return array('code' => 0, 'msg' => '验证码已过期！');
            }
            if(cache($data['type'].'_'.session('user.username'))!=$code){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            cache($data['type'].'_'.session('user.username'),NULL);
            return json(['status'=>1,'url'=>url('newPhone')]);
        }else{  
            return $this->fetch($this->whereIs.'/'.'change_phone');
        }
    }

    public function newPhone(){
        if(request()->isAjax()){
            $data=input('param.');
            $code=input('param.code');
            if(!cache($data['type'].'_'.$data['phone'])){
                return array('code' => 0, 'msg' => '验证码已过期！');
            }
            if(cache($data['type'].'_'.$data['phone'])!=$code){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            cache($data['type'].'_'.$data['phone'],NULL);
            $updateArr['username']=$data['phone'];
            $res=db('users')->where('id',$this->userid)->update($updateArr);
            if($res){
                //变更session信息
                session('user.username',$data['phone']);
                $arr=['status'=>1,'msg'=>'修改成功!'];
            }else{
                $arr=['status'=>0,'msg'=>'系统繁忙，请稍候再试！'];
            }
            return json($arr);
        }else{  
            return $this->fetch($this->whereIs.'/'.'new_phone');
        }
    }

    public function mySuggestion(){
        $where=[
            'userid'=>$this->userid
        ];
        $list = Db::table(config('database.prefix') . 'message')
        ->where($where)
        ->order('user_addtime desc')
        ->paginate(config('pageSize'));
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->assign('listArr',$list->toArray());

        //更新我的未读意见建议
        $where['is_read']=2;
        db('message')->where($where)->update(['is_read'=>1]);
        return $this->fetch($this->whereIs.'/'.'my_suggestion');
    }

    public function addSuggestion(){
        if(request()->isAjax()){
            $data = input('param.');
            $data['userid']=$this->userid;
            $data['user_addtime'] = time();
            $data['ip'] = getIp();
            $res=db('message')->insert($data);
            if($res){
                $arr=['status'=>1,'msg'=>'感谢您的反馈！'];
            }else{
                $arr=['status'=>0,'msg'=>'系统繁忙，请稍候再试！'];
            }
            return json($arr);
        }else{
            return $this->fetch($this->whereIs.'/'.'add_suggestion');
        }
    }

    public function myMsg(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $is_read = input('param.is_read');
            $where=[
                'type'=>'msg',
                'userid'=>$this->userid
            ];
            if(!empty($is_read)){
                $where['is_read']=$is_read;
            }
            $list=db('send_msg')
                ->where($where)
                ->order('addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['addtime'] = date('Y-m-d H:s',$v['addtime']);
                $list['data'][$k]['indexs']=($page-1)*$pageSize+($k+1);
                $list['data'][$k]['origin_is_read']=$v['is_read'];
                $list['data'][$k]['is_read']=getIsRead($v['is_read']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }else{
            $this->assign('url',url('myMsg'));
            return $this->fetch($this->whereIs.'/'.'my_msg');
        }
    }

    public function mySms(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $is_read = input('param.is_read');
            $where=[
                'type'=>'sms',
                'userid'=>$this->userid
            ];
            if(!empty($is_read)){
                $where['is_read']=$is_read;
            }
            $list=db('send_msg')
                ->where($where)
                ->order('addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['addtime'] = date('Y-m-d H:s',$v['addtime']);
                $list['data'][$k]['indexs']=($page-1)*$pageSize+($k+1);
                $list['data'][$k]['origin_is_read']=$v['is_read'];
                $list['data'][$k]['is_read']=getIsRead($v['is_read']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }else{
            $this->assign('url',url('mySms'));
            return $this->fetch($this->whereIs.'/'.'my_msg');
        }
    }

    public function sendMsgDetail(){
        $id=input('param.id');
        $info=db('send_msg',[],false)->where('id',$id)->find();
        db('send_msg',[],false)->where('id',$id)->update(['is_read'=>1]);
        $this->assign('info',$info);
        return $this->fetch($this->whereIs.'/'.'send_msg_detail');
    }

    public function myQuestionnaire(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $where=[
                'userid'=>$this->userid
            ];
            $list=db('questionnaires',[],false)->alias('a')
                ->join('__REPLY__ b','a.id=b.questionnaire_id')
                ->where($where)
                ->order('b.addtime desc')
                ->field('a.id as questionnaire_id,a.*,b.*')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['addtime'] = date('Y-m-d H:s',$v['addtime']);
                $list['data'][$k]['indexs']=($page-1)*$pageSize+($k+1);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }
        return $this->fetch($this->whereIs.'/'.'my_questionnaire');
    }

    public function myQuestion(){
        $where=[
            'questionnaire_id'=>input('param.questionnaire_id'),
            'userid'=>$this->userid
        ];
        $answerRow=db('reply')->where($where)->find();

        $rows=[];
        if(!empty($answerRow)){
            $replyRow=json_decode($answerRow['reply'],true);
            foreach ($replyRow as $k => $v) {
                $replyRow[$k]=explode(',',$v);
            }
            $rows=db('questions')->where('questionnaire_id',$answerRow['questionnaire_id'])->select();
            foreach ($rows as $k => $v) {
                $optionsList=json_decode($v['options'],true);
                $rows[$k]['answer']='';
                if($optionsList[0]['type']!='textarea'){
                    if(isset($replyRow[$v['id']])){
                        foreach ($replyRow[$v['id']] as $m => $n) {
                            $rows[$k]['answer'].=$optionsList[$n]['text'].' ';
                        }
                    }
                }else{
                    $rows[$k]['answer']=$replyRow[$v['id']][0];
                }
                $rows[$k]['indexs']=$k+1;
            }
        }
        $this->assign('questions',$rows);
        return $this->fetch($this->whereIs.'/'.'my_question');
    }
}