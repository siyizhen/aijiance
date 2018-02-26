<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-01-05 14:01:02
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-26 15:55:41
 */
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
use tree\Tree;

class Vct extends Common{
    public function _initialize(){
        parent::_initialize();
    }

    public function downloadList(){
        $key = input('post.key');
        $is_first_jiance = input('param.is_first_jiance');
        $from_qudao = input('param.from_qudao');
        $visited_reason = input('param.visited_reason');
        $baolou_reason = input('param.baolou_reason');
        $renqun_shuxing = input('param.renqun_shuxing');
        $jinbiao_jiance = input('param.jinbiao_jiance');
        $is_take_gift = input('param.is_take_gift');
        $is_get_weixin = input('param.is_get_weixin');
        $is_take_ajiance = input('param.is_take_ajiance');
        $role_id = input('param.role_id');
        $addtime = input('param.addtime');

        $where['a.username|a.idcard|a.truename|a.phone|a.address|a.jiance_bianhao|a.gift']=['like',"%$key%"];
        if(session('aid')!=1){//超级管理员显示所有
            if($role_id==''){
                $role_id=session('role_id');
                if(in_array($role_id,$this->getAllVct())){
                    //如果属于vct机构管理员角色 则获取所有下级办公室
                    $this->vctArr=[];//先清空以前的数据
                    $this->getVctArr($role_id);
                    $allNext=$this->vctArr;
                    array_push($allNext,$role_id);
                    $where['a.role_id']=array('in',$allNext);
                }
            }else{
                $where['a.role_id']=$role_id;
            }
        }else{
            if($role_id!=''){
                $where['a.role_id']=$role_id;
            }
        }

        if(!empty($addtime)){
            $addtimeArr=explode(' - ',$addtime);
            $addtime_start=strtotime($addtimeArr[0]);
            $addtime_end=strtotime($addtimeArr[1]);
            $addtime_end=$addtime_end+3600*24-1;
            $where['a.addtime']=array('between',"$addtime_start,$addtime_end");
        }
        if($is_first_jiance!=''){
            $where['a.is_first_jiance']=$is_first_jiance;
        }
        if($from_qudao!=''){
            $where['a.from_qudao']=$from_qudao;
        }
        if($visited_reason!=''){
            $where['a.visited_reason']=$visited_reason;
        }
        if($baolou_reason!=''){
            $where['a.baolou_reason']=$baolou_reason;
        }
        if($renqun_shuxing!=''){
            $where['a.renqun_shuxing']=$renqun_shuxing;
        }
        if($jinbiao_jiance!=''){
            $where['a.jinbiao_jiance']=$jinbiao_jiance;
        }
        if($is_take_gift!=''){
            $where['a.is_take_gift']=$is_take_gift;
        }
        if($is_get_weixin!=''){
            $where['a.is_get_weixin']=$is_get_weixin;
        }
        if($is_take_ajiance!=''){
            $where['a.is_take_ajiance']=$is_take_ajiance;
        }

        $rows=Db::table(config('database.prefix') . 'vct')->alias('a')
                ->join(config('database.prefix') . 'role b', 'a.role_id = b.id', 'left')
                ->join(config('database.prefix') . 'admin c','a.aid=c.admin_id')
                ->field('a.*,b.name as zixundian,c.username as admin_name')
                ->where($where)->select();
        foreach ($rows as $k=>$v){
            $rows[$k]['index']=$k+1;
            $rows[$k]['addtime'] = date('Y-m-d',$v['addtime']);
            $rows[$k]['visited_time'] = date('Y-m-d',$v['visited_time']);
            if(!empty($v['last_jiance_time'])){
                $rows[$k]['last_jiance_time'] = date('Y-m-d',$v['last_jiance_time']);
            }else{
                $rows[$k]['last_jiance_time']='';
            }
            if($v['sex']==1){
                $rows[$k]['sex']='男';
            }else{
                $rows[$k]['sex']='女';
            }
            if($v['is_first_jiance']==1){
                $rows[$k]['is_first_jiance']='是';
            }else{
                $rows[$k]['is_first_jiance']='否';
            }
            if($v['jinbiao_jiance']==1){
                $rows[$k]['jinbiao_jiance']='阴性';
            }else{
                $rows[$k]['jinbiao_jiance']='待复查';
            }
            if($v['is_take_gift']==1){
                $rows[$k]['is_take_gift']='是';
            }else{
                $rows[$k]['is_take_gift']='否';
            }
            if($v['is_get_weixin']==1){
                $rows[$k]['is_get_weixin']='是';
            }else{
                $rows[$k]['is_get_weixin']='否';
            }
            if($v['is_take_ajiance']==1){
                $rows[$k]['is_take_ajiance']='是';
            }else{
                $rows[$k]['is_take_ajiance']='否';
            }
            if($v['jiankang_plan']==1){
                $rows[$k]['jiankang_plan']='加入';
            }else{
                $rows[$k]['jiankang_plan']='不加入';
            }
            $rows[$k]['from_qudao']=getFromQudao($v['from_qudao']);
            $rows[$k]['visited_reason']=getVisitedReason($v['visited_reason']);
            $rows[$k]['baolou_reason']=getBaolouReason($v['baolou_reason']);
            $rows[$k]['hunyin']=getHunYin($v['hunyin']);
            $rows[$k]['zhiye']=getZhiYe($v['zhiye']);
            $rows[$k]['xueli']=getXueLi($v['xueli']);
            $rows[$k]['shouru']=getShouRu($v['shouru']);
            $rows[$k]['renqun_shuxing']=getRenqunShuxing($v['renqun_shuxing']);
            $rows[$k]['mingzu']=getMingZu($v['mingzu']);
            $rows[$k]['livetime']=getLiveTime($v['livetime']);
            if($v['school']==0){
                $rows[$k]['school']='未填';
            }
            if(!empty($v['last_jiance_jigou'])){
                $rows[$k]['last_jiance_jigou']=db('role',[],false)->where('id',$v['last_jiance_jigou'])->value('name');
            }
            $rows[$k]['chuangkouqi']=getChuangKouQi($v['chuangkouqi']);
            if(!empty($v['gift'])){
                $giftArr=explode('|',$v['gift']);
                unset($rows[$k]['gift']);
                foreach ($giftArr as $m => $n) {
                    $rows[$k]['gift'].=getGift($n).' ';
                }
            }
        }
        $_pre=array('index'=>'编号','username'=>'姓名','sex'=>'性别','age'=>'年龄','phone'=>'电话','address'=>'现居地','jiance_bianhao'=>'检测编号','is_first_jiance'=>'首次检测','visited_time'=>'来访时间','zixundian'=>'咨询点','from_qudao'=>'得知渠道','visited_reason'=>'来访原因','baolou_reason'=>'暴露原因','baolou_reason_note'=>'暴露原因说明','hunyin'=>'婚姻状况','zhiye'=>'职业情况','xueli'=>'学历情况','shouru'=>'收入情况','chuangkouqi'=>'窗口期','chuangkouqi_note'=>'窗口期说明','renqun_shuxing'=>'人群属性','jinbiao_jiance'=>'快速检测','school'=>'学校','mingzu'=>'民族','mingzu_note'=>'其他民族','livetime'=>'本地居住时间','last_jiance_jigou'=>'上次检测机构','last_jiance_jigou_note'=>'上次检测机构说明','last_jiance_time'=>'上次检测时间','is_take_gift'=>'领取礼品','gift'=>'礼品名','gift_note'=>'其他礼品说明','is_get_weixin'=>'加咨询员微信/QQ','is_take_ajiance'=>'关注艾检测','jiankang_plan'=>'健康计划');
        $dates=date('YmdHis');
        $content=getXLSFromList($_pre,$rows);
        header("Content-type:application/vnd.ms-execl;charset=gb2312");
        header("Content-Disposition:attactment;filename=VCT信息数据".$dates.".xls");
        header("Pragma: no-cache");header("Expires: 0");
        echo $content;exit;
    }

	public function index(){
        if(request()->isPost()) {
            $key = input('post.key');
            $this->assign('testkey', $key);
            $is_first_jiance = input('param.is_first_jiance');
            $from_qudao = input('param.from_qudao');
            $visited_reason = input('param.visited_reason');
            $baolou_reason = input('param.baolou_reason');
            $renqun_shuxing = input('param.renqun_shuxing');
            $jinbiao_jiance = input('param.jinbiao_jiance');
            $is_take_gift = input('param.is_take_gift');
            $is_get_weixin = input('param.is_get_weixin');
            $is_take_ajiance = input('param.is_take_ajiance');
            $role_id = input('param.role_id');
            $addtime = input('param.addtime');
            $hunyin = input('param.hunyin');
            $xueli = input('param.xueli');
            $zhiye = input('param.zhiye');
            $shouru = input('param.shouru');

            $where['a.username|a.idcard|a.phone|a.address|a.jiance_bianhao|a.gift']=['like',"%$key%"];
            if(session('aid')!=1){//超级管理员显示所有
                if($role_id==''){
                    $role_id=session('role_id');
                    if(in_array($role_id,$this->getAllVct())){
                        //如果属于vct机构管理员角色 则获取所有下级办公室
                        $this->vctArr=[];//先清空以前的数据
                        $this->getVctArr($role_id);
                        $allNext=$this->vctArr;
                        array_push($allNext,$role_id);
                        $where['a.role_id']=array('in',$allNext);
                    }
                }else{
                    $where['a.role_id']=$role_id;
                }
            }else{
                if($role_id!=''){
                    $where['a.role_id']=$role_id;
                }
            }

            if(!empty($addtime)){
                $addtimeArr=explode(' - ',$addtime);
                $addtime_start=strtotime($addtimeArr[0]);
                $addtime_end=strtotime($addtimeArr[1]);
                $addtime_end=$addtime_end+3600*24-1;
                $where['a.addtime']=array('between',"$addtime_start,$addtime_end");
            }
            if($is_first_jiance!=''){
                $where['a.is_first_jiance']=$is_first_jiance;
            }
            if($from_qudao!=''){
                $where['a.from_qudao']=$from_qudao;
            }
            if($visited_reason!=''){
                $where['a.visited_reason']=$visited_reason;
            }
            if($baolou_reason!=''){
                $where['a.baolou_reason']=$baolou_reason;
            }
            if($renqun_shuxing!=''){
                $where['a.renqun_shuxing']=$renqun_shuxing;
            }
            if($jinbiao_jiance!=''){
                $where['a.jinbiao_jiance']=$jinbiao_jiance;
            }
            if($is_take_gift!=''){
                $where['a.is_take_gift']=$is_take_gift;
            }
            if($is_get_weixin!=''){
                $where['a.is_get_weixin']=$is_get_weixin;
            }
            if($is_take_ajiance!=''){
                $where['a.is_take_ajiance']=$is_take_ajiance;
            }
            if($hunyin!=''){
                $where['a.hunyin']=$hunyin;
            }
            if($xueli!=''){
                $where['a.xueli']=$xueli;
            }
            if($zhiye!=''){
                $where['a.zhiye']=$zhiye;
            }
            if($shouru!=''){
                $where['a.shouru']=$shouru;
            }

            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $list = Db::table(config('database.prefix') . 'vct')->alias('a')
                ->join(config('database.prefix') . 'role b', 'a.role_id = b.id', 'left')
                ->join(config('database.prefix') . 'admin c','a.aid=c.admin_id')
                ->field('a.*,b.name as zixundian,c.username as admin_name')
                ->where($where)
                ->order('a.addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            $totalNums=Db::table(config('database.prefix') . 'vct')->alias('a')
                ->join(config('database.prefix') . 'role b', 'a.role_id = b.id', 'left')
                ->join(config('database.prefix') . 'admin c','a.aid=c.admin_id')
                ->field('a.*,b.name as zixundian,c.username as admin_name')
                ->where($where)->count('a.id');
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['index']=$totalNums-$k-($page-1)*$pageSize;
                $list['data'][$k]['addtime'] = date('Y-m-d',$v['addtime']);
                $list['data'][$k]['visited_time'] = date('Y-m-d',$v['visited_time']);
                if(!empty($v['last_jiance_time'])){
                    $list['data'][$k]['last_jiance_time'] = date('Y-m-d',$v['last_jiance_time']);
                }else{
                    $list['data'][$k]['last_jiance_time'] = '';
                }
                if($v['sex']==1){
                    $list['data'][$k]['sex']='男';
                }else{
                    $list['data'][$k]['sex']='女';
                }
                if($v['is_first_jiance']==1){
                    $list['data'][$k]['is_first_jiance']='是';
                }else{
                    $list['data'][$k]['is_first_jiance']='否';
                }
                if($v['jinbiao_jiance']==1){
                    $list['data'][$k]['jinbiao_jiance']='阴性';
                }else{
                    $list['data'][$k]['jinbiao_jiance']='待复查';
                }
                if($v['is_take_gift']==1){
                    $list['data'][$k]['is_take_gift']='是';
                }else{
                    $list['data'][$k]['is_take_gift']='否';
                }
                if($v['is_get_weixin']==1){
                    $list['data'][$k]['is_get_weixin']='是';
                }else{
                    $list['data'][$k]['is_get_weixin']='否';
                }
                if($v['is_take_ajiance']==1){
                    $list['data'][$k]['is_take_ajiance']='是';
                }else{
                    $list['data'][$k]['is_take_ajiance']='否';
                }
                if($v['jiankang_plan']==1){
                    $list['data'][$k]['jiankang_plan']='加入';
                }else{
                    $list['data'][$k]['jiankang_plan']='不加入';
                }
                $list['data'][$k]['from_qudao']=getFromQudao($v['from_qudao']);
                $list['data'][$k]['visited_reason']=getVisitedReason($v['visited_reason']);
                $list['data'][$k]['baolou_reason']=getBaolouReason($v['baolou_reason']);
                $list['data'][$k]['renqun_shuxing']=getRenqunShuxing($v['renqun_shuxing']);
                $list['data'][$k]['hunyin']=getHunYin($v['hunyin']);
                $list['data'][$k]['zhiye']=getZhiYe($v['zhiye']);
                $list['data'][$k]['xueli']=getXueLi($v['xueli']);
                $list['data'][$k]['shouru']=getShouRu($v['shouru']);
                $list['data'][$k]['mingzu']=getMingZu($v['mingzu']);
                $list['data'][$k]['livetime']=getLiveTime($v['livetime']);
                if($v['school']==0){
                    $list['data'][$k]['school']='未填';
                }
                if(!empty($v['last_jiance_jigou'])){
                    $list['data'][$k]['last_jiance_jigou']=db('role',[],false)->where('id',$v['last_jiance_jigou'])->value('name');
                }
                $list['data'][$k]['quezheng_danwei']=getQueZheng($v['quezheng_danwei']);
                $list['data'][$k]['chuangkouqi']=getChuangKouQi($v['chuangkouqi']);
                if(!empty($v['gift'])){
                    $giftArr=explode('|',$v['gift']);
                    unset($list['data'][$k]['gift']);
                    foreach ($giftArr as $m => $n) {
                        $list['data'][$k]['gift'].=getGift($n).' ';
                    }
                }
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }
        if(session('aid')!=1){//超级管理员显示所有
            $role_id=session('role_id');
            if(in_array($role_id,$this->getAllVct())){
                //如果属于vct机构管理员角色 则获取所有下级办公室
                $this->vctArr=[];//先清空以前的数据
                $this->getVctArr($role_id);
                array_push($this->vctArr,$role_id);
            }
        }else{
            $this->getAllVct();
        }
        $allNext=$this->vctArr;
        $zixundianList=db('role',[],false)->where('id','in',$allNext)->field('pid,id,name')->select();
        $config=[
            'id'=>'id',
            'pid'=>'pid',
            'title'=>'name'
        ];
        $tree=new Tree($config);
        $zixundianList=$tree->toList($zixundianList);
        $this->assign('zixundianList',$zixundianList);
        return $this->fetch();
    }

    //添加
    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            $data['addtime'] = time();
            $giftArr=[];
            if(!empty($data['gift'])){
                foreach ($data['gift'] as $k => $v) {
                    $giftArr[]=$v;
                }
                $data['gift']=implode('|',$giftArr);
            }
            foreach ($data as $k => $v) {
                $data[$k]=trim($v);
            }
            if(!empty($data['visited_time'])){
                $data['visited_time']=strtotime($data['visited_time']);
            }
            if(!empty($data['last_jiance_time'])){
                $data['last_jiance_time']=strtotime($data['last_jiance_time']);
            }

            unset($data['province'],$data['city'],$data['area']);
            $data['address']=$data['sheng'].' '.$data['shi'].' '.$data['qu'];

            if(!in_array(session('role_id'),$this->getAllVct())){
                $data['role_id']=config('role_root');
                $data['aid']=config('role_root_admin_id');
            }else{
                $data['role_id']=session('role_id');
                $data['aid']=session('aid');
            }

            //判断该用户是否已添加
            $where=[
                'username'=>$data['username'],
                'phone'=>$data['phone']
            ];
            $row=db('vct',[],false)->where($where)->count('id');
            if(!empty($row)){
                db('vct',[],false)->where($where)->update($data);
            }else{
                db('vct',[],false)->insert($data);
            }
            $result['code'] = 1;
            $result['msg'] = 'VCT信息采集成功!';
            $result['url'] = url('add');
            return $result;
        }else{
            $this->assign('role_id',$role_id);
            $this->assign('title',lang('add').lang('vct'));
            $this->assign('info',NULL);
            return $this->fetch('form');
        }
    }

    public function edit(){
        if(request()->isPost()) {
            $data = input('post.');
            if(!empty($data['gift'])){
                foreach ($data['gift'] as $k => $v) {
                    $giftArr[]=$v;
                }
                $data['gift']=implode('|',$giftArr);
            }
            
            foreach ($data as $k => $v) {
                $data[$k]=trim($v);
            }
            if(!empty($data['visited_time'])){
                $data['visited_time']=strtotime($data['visited_time']);
            }
            if(!empty($data['last_jiance_time'])){
                $data['last_jiance_time']=strtotime($data['last_jiance_time']);
            }

            unset($data['province'],$data['city'],$data['area']);
            $data['address']=$data['sheng'].' '.$data['shi'].' '.$data['qu'];

            db('vct',[],false)->update($data);
            $result['code'] = 1;
            $result['msg'] = 'VCT信息修改成功!';
            $result['url'] = url('index');
            return $result;
        }else{
            $id=input('id');
            $info=db('vct',[],false)->where(array('id'=>$id))->find();
            if(!empty($info['gift'])){
                $info['gift']=explode('|',$info['gift']);
            }
            if(!empty($info['last_jiance_jigou'])){
                $info['last_jiance_jigou']=db('role',[],false)->where('id',$info['last_jiance_jigou'])->value('name');
            }
            $this->assign('info',$info);
            $this->assign('title',lang('edit').lang('vct'));
            return $this->fetch('form');
        }
    }

    public function del(){
        $info=db('vct',[],false)->where(array('id'=>input('id')))->find();
        if(!empty($info['signature_image'])){
            if(file_exists('.'.$info['signature_image'])){
                unlink('.'.$info['signature_image']);
            }
        }
        if(!empty($info['result_image'])){
            if(file_exists('.'.$info['result_image'])){
                unlink('.'.$info['result_image']);
            }
        }
        db('vct')->where(array('id'=>input('id')))->delete();
        db('reply')->where('vct_id',input('param.id'))->delete();
        return ['code'=>1,'msg'=>'删除成功！'];
    }

    public function delall(){
        $map['id'] =array('in',input('param.ids/a'));
        $rows=db('vct',[],false)->where($map)->select();
        foreach ($rows as $k => $v) {
            if(!empty($v['signature_image'])){
                if(file_exists('.'.$v['signature_image'])){
                    unlink('.'.$v['signature_image']);
                }
            }
            if(!empty($v['result_image'])){
                if(file_exists('.'.$v['result_image'])){
                    unlink('.'.$v['result_image']);
                }
            }
        }
        db('vct',[],false)->where($map)->delete();
        $maps['vct_id']=array('in',input('param.ids/a'));
        db('reply',[],false)->where($maps)->delete();
        $result['msg'] = '删除成功！';
        $result['code'] = 1;
        $result['url'] = url('index');
        return $result;
    }

    public function printInfo(){
        $id=input('id');
        $info=db('vct',[],false)->alias('a')->join('__ROLE__ b','a.role_id=b.id')->join('__ADMIN__ c','a.aid=c.admin_id')->where(array('a.id'=>$id))->field('a.*,b.name as zixundian,c.admin_truename')->find();
        if(!empty($info['gift'])){
            $giftArr=explode('|',$info['gift']);
            unset($info['gift']);
            foreach ($giftArr as $m => $n) {
                $info['gift'].=getGift($n).' ';
            }
        }
        if(!empty($info['last_jiance_jigou'])){
            $info['last_jiance_jigou']=db('role',[],false)->where('id',$info['last_jiance_jigou'])->value('name');
        }
        $this->assign('info',$info);

        //问题答案显示
        $rows=[];

        $answerRow=db('reply')->where('vct_id',$id)->find();
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
                    foreach ($replyRow[$v['id']] as $m => $n) {
                        $rows[$k]['answer'].=$optionsList[$n]['text'].' ';
                    }
                }else{
                    $rows[$k]['answer']=$replyRow[$v['id']][0];
                }
            }
        }
        $this->assign('questions',$rows);
        return $this->fetch();
    }

    public function sendSms(){
        $phones=input('param.phones/a');
        $data=[];
        foreach ($phones as $k => $v) {
            $data=[
                'phone'=>$v,
                'codeTemplate'=>config('vct_template_code'),
                'params'=>[
                    'code'=>10000
                ]
            ];
            sendSms($data);
        }
        $result['msg'] = '发送成功！';
        $result['code'] = 1;
        return json($result);
    }

    public function tongJi(){
        if(request()->isAjax()){
            $types=input('param.types');
            $role_id=input('param.role_id');
            $addtime=input('param.addtime');

            $where=[];
            if(!empty($role_id)){
                $this->getVctArr($role_id);
                $allNext=$this->vctArr;
                array_push($allNext,$role_id);
                $where['role_id']=array('in',$allNext);
            }

            if(!empty($addtime)){
                $addtimeArr=explode(' - ',$addtime);
                $addtime_start=strtotime($addtimeArr[0]);
                $addtime_end=strtotime($addtimeArr[1]);
                $addtime_end=$addtime_end+3600*24-1;
                $where['addtime']=array('between',"$addtime_start,$addtime_end");
            }
            $one=$two=$three=$four=$five=$six=$seven=$eight=$nine=$ten=0;
            $rows=db('vct',[],false)->where($where)->select();
            switch ($types) {
                case '1':
                    $seriesData=[
                        ['value'=>0,'name'=>'是'],
                        ['value'=>0,'name'=>'否']
                    ];
                    foreach ($rows as $k => $v) {
                        if($v['is_first_jiance']==1){
                            $seriesData[0]['value']++;
                        }elseif($v['is_first_jiance']==0){
                            $seriesData[1]['value']++;
                        }
                    }
                    $valueArr=array($seriesData[0]['value'],$seriesData[1]['value']);
                    $legendData=['是','否'];
                    $arr=[
                        'legendData'=>$legendData,
                        'seriesData'=>$seriesData,
                        'title'=>'首次检测'
                    ];
                    break;
                case '2':
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (fromQudao() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }

                    foreach ($rows as $k => $v) {
                        foreach (fromQudao() as $n => $m) {
                            if($v['from_qudao']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'得知渠道'
                    ];
                    break;
                case '3':
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (visitedReason() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }
                    foreach ($rows as $k => $v) {
                        foreach (visitedReason() as $n => $m) {
                            if($v['visited_reason']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'来访原因'
                    ];
                    break;
                case '4':
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (baolouReason() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }
                    foreach ($rows as $k => $v) {
                        foreach (baolouReason() as $n => $m) {
                            if($v['baolou_reason']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'暴露原因'
                    ];
                    break;
                case '5':
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (renqunShuxing() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }
                    foreach ($rows as $k => $v) {
                        foreach (renqunShuxing() as $n => $m) {
                            if($v['renqun_shuxing']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'人群属性'
                    ];
                    break;
                case '6':
                    $seriesData=[
                        ['value'=>0,'name'=>'阴性'],
                        ['value'=>0,'name'=>'待复查']
                    ];
                    foreach ($rows as $k => $v) {
                        if($v['jinbiao_jiance']==1){
                            $seriesData[0]['value']++;
                        }elseif($v['jinbiao_jiance']==2){
                            $seriesData[1]['value']++;
                        }
                    }
                    $valueArr=array($seriesData[0]['value'],$seriesData[1]['value']);
                    $legendData=['阴性','待复查'];
                    $arr=[
                        'legendData'=>$legendData,
                        'seriesData'=>$seriesData,
                        'title'=>'金标检测'
                    ];
                    break;
                case '7':
                    $seriesData=[
                        ['value'=>0,'name'=>'是'],
                        ['value'=>0,'name'=>'否']
                    ];
                    foreach ($rows as $k => $v) {
                        if($v['is_take_gift']==1){
                            $seriesData[0]['value']++;
                        }elseif($v['is_take_gift']==0){
                            $seriesData[1]['value']++;
                        }
                    }
                    $valueArr=array($seriesData[0]['value'],$seriesData[1]['value']);
                    $legendData=['是','否'];
                    $arr=[
                        'legendData'=>$legendData,
                        'seriesData'=>$seriesData,
                        'title'=>'领取礼品'
                    ];
                    break;
                case '8':
                    $seriesData=[
                        ['value'=>0,'name'=>'是'],
                        ['value'=>0,'name'=>'否']
                    ];
                    foreach ($rows as $k => $v) {
                        if($v['is_get_weixin']==1){
                            $seriesData[0]['value']++;
                        }elseif($v['is_get_weixin']==0){
                            $seriesData[1]['value']++;
                        }
                    }
                    $valueArr=array($seriesData[0]['value'],$seriesData[1]['value']);
                    $legendData=['是','否'];
                    $arr=[
                        'legendData'=>$legendData,
                        'seriesData'=>$seriesData,
                        'title'=>'加咨询员'
                    ];
                    break;
                case '9':
                    $seriesData=[
                        ['value'=>0,'name'=>'是'],
                        ['value'=>0,'name'=>'否']
                    ];
                    foreach ($rows as $k => $v) {
                        if($v['is_take_ajiance']==1){
                            $seriesData[0]['value']++;
                        }elseif($v['is_take_ajiance']==0){
                            $seriesData[1]['value']++;
                        }
                    }
                    $valueArr=array($seriesData[0]['value'],$seriesData[1]['value']);
                    $legendData=['是','否'];
                    $arr=[
                        'legendData'=>$legendData,
                        'seriesData'=>$seriesData,
                        'title'=>'关注艾检测'
                    ];
                    break;
                case 10:
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (hunYin() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }

                    foreach ($rows as $k => $v) {
                        foreach (hunYin() as $n => $m) {
                            if($v['hunyin']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'婚姻情况'
                    ];
                    break;
                case 11:
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (zhiYe() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }

                    foreach ($rows as $k => $v) {
                        foreach (zhiYe() as $n => $m) {
                            if($v['zhiye']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'职业情况'
                    ];
                    break;
                case 12:
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (xueLi() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }

                    foreach ($rows as $k => $v) {
                        foreach (xueLi() as $n => $m) {
                            if($v['xueli']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'学历情况'
                    ];
                    break;
                case 13:
                    $legendData=$seriesData=$zhuSeriesData=[];
                    foreach (shouRu() as $k => $v) {
                        array_push($legendData,$v);
                        $zhuSeriesData[$k-1]=0;
                        $seriesData[$k-1]['value']=0;
                        $seriesData[$k-1]['name']=$v;
                    }

                    foreach ($rows as $k => $v) {
                        foreach (shouRu() as $n => $m) {
                            if($v['shouru']==$n){
                                $zhuSeriesData[$n-1]++;
                                $seriesData[$n-1]['value']++;
                            }
                        }
                    }
                    $arr=[
                        'legendData'=>$legendData,
                        'zhuSeriesData'=>$zhuSeriesData,
                        'seriesData'=>$seriesData,
                        'title'=>'收入情况'
                    ];
                    break;

            }
            return json($arr);
        }
        if(session('aid')!=1){//超级管理员显示所有
            $role_id=session('role_id');
            if(in_array($role_id,$this->getAllVct())){
                //如果属于vct机构管理员角色 则获取所有下级办公室
                $this->vctArr=[];//先清空以前的数据
                $this->getVctArr($role_id);
                array_push($this->vctArr,$role_id);
            }
        }else{
            $this->getAllVct();
        }
        $allNext=$this->vctArr;
        $zixundianList=db('role',[],false)->where('id','in',$allNext)->field('pid,id,name')->select();
        $config=[
            'id'=>'id',
            'pid'=>'pid',
            'title'=>'name'
        ];
        $tree=new Tree($config);
        $zixundianList=$tree->toList($zixundianList);
        $this->assign('zixundianList',$zixundianList);
        return $this->fetch();
    }

    public function bianHaoPrefix(){
        if(request()->isAjax()){
            $this->getAllVct();
            $lastVtcArr=$this->vctArr;
            $rows=db('role',[],false)->where('id','in',$lastVtcArr)->field('name,id')->order('id asc')->select();
            $renqunArr=renqunShuxing();
            $resArr=[];
            foreach ($rows as $k => $v) {
                $resArr[$k]['name']=$v['name'];
                $resArr[$k]['origin_zixundian']=$v['id'];
                $newRows=db('bianhao_prefix',[],false)->where('zixundian',$v['id'])->select();
                foreach ($newRows as $m => $n) {
                    foreach ($renqunArr as $mm => $nn) {
                        if($n['renqun_shuxing']==$mm){
                            $resArr[$k][$mm]=$n['prefix'];
                        }
                    }
                }
            }
            $arr=['code'=>0,'msg'=>'','count'=>count($resArr),'data'=>$resArr];
            return json($arr);
        }
        return $this->fetch();
    }

    public function bianHaoPrefixDo(){
        $data=input('param.');
        $where=array('zixundian'=>$data['zixundian'],'renqun_shuxing'=>$data['renqun_shuxing']);
        $num=db('bianhao_prefix',[],false)->where($where)->count('id');
        if($num){
            $updateArr['prefix']=$data['prefix'];
            if(empty(trim($data['prefix']))){
                db('bianhao_prefix',[],false)->where($where)->delete();
            }else{
                db('bianhao_prefix',[],false)->where($where)->update($updateArr);
            }
        }else{
            db('bianhao_prefix',[],false)->insert($data);
        }
        return json(['status'=>1,'msg'=>'操作成功！']);
    }

    public function questionnaire(){
        if(request()->isAjax()){
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');

            $list = Db::table(config('database.prefix') . 'questionnaires')
                ->alias('a')
                ->join(config('database.prefix') . 'role b', 'a.role_id = b.id', 'left')
                ->field('a.*,b.name as zixundian')
                ->order('addtime desc')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['index']=($page-1)*$pageSize+($k+1);
                $list['data'][$k]['origin_is_use']=$v['is_use'];
                $list['data'][$k]['addtime']=date('Y-m-d',$v['addtime']);
                $list['data'][$k]['is_use']=getIsUse($v['is_use']);
                $list['data'][$k]['renqun_shuxing']=getRenqunShuxing($v['renqun_shuxing']);
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

            if(session('aid')!=1){//超级管理员显示所有
                $role_id=session('role_id');
                if(in_array($role_id,$this->getAllVct())){
                    //如果属于vct机构管理员角色 则获取所有下级办公室
                    $this->vctArr=[];//先清空以前的数据
                    $this->getVctArr($role_id);
                    array_push($this->vctArr,$role_id);
                }
            }else{
                $this->getAllVct();
            }
            $allNext=$this->vctArr;
            $zixundianList=db('role',[],false)->where('id','in',$allNext)->field('pid,id,name')->select();
            $config=[
                'id'=>'id',
                'pid'=>'pid',
                'title'=>'name'
            ];
            $tree=new Tree($config);
            $zixundianList=$tree->toList($zixundianList);
            $this->assign('zixundianList',$zixundianList);

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

            if(session('aid')!=1){//超级管理员显示所有
                $role_id=session('role_id');
                if(in_array($role_id,$this->getAllVct())){
                    //如果属于vct机构管理员角色 则获取所有下级办公室
                    $this->vctArr=[];//先清空以前的数据
                    $this->getVctArr($role_id);
                    array_push($this->vctArr,$role_id);
                }
            }else{
                $this->getAllVct();
            }
            $allNext=$this->vctArr;
            $zixundianList=db('role',[],false)->where('id','in',$allNext)->field('pid,id,name')->select();
            $config=[
                'id'=>'id',
                'pid'=>'pid',
                'title'=>'name'
            ];
            $tree=new Tree($config);
            $zixundianList=$tree->toList($zixundianList);
            $this->assign('zixundianList',$zixundianList);
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
            //db('questionnaires')->where(array('is_use'=>2))->update(['is_use'=>1]);
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

    public function xueXiaoTongJi(){
        $role_id=input('param.role_id');
        $addtime=input('param.addtime');

        $where=[];
        $wheres='';
        if(!empty($role_id)){
            $this->getVctArr($role_id);
            $allNext=$this->vctArr;
            array_push($allNext,$role_id);
            $where['role_id']=array('in',$allNext);

            $wheres.=' in ('.implode(',',$allNext).') ';
        }

        if(!empty($addtime)){
            $addtimeArr=explode(' - ',$addtime);
            $addtime_start=strtotime($addtimeArr[0]);
            $addtime_end=strtotime($addtimeArr[1]);
            $addtime_end=$addtime_end+3600*24-1;
            $where['addtime']=array('between',"$addtime_start,$addtime_end");

            $wheres.=" between $addtime_start and $addtime_end ";
        }
        $total=db('vct',[],false)->where($where)->count('id');
        $rows=db('vct',[],false)->where($where)->field('school,COUNT(*) as nums')->group('school')->select();

        if(!empty($rows)){
            $sort = array(  
                'direction' => 'SORT_DESC', 
                'field'     => 'nums',       //排序字段  
            );  
            $arrSort = array();  
            foreach($rows AS $uniqid => $row){  
                foreach($row AS $key=>$value){  
                    $arrSort[$key][$uniqid] = $value;  
                }  
            }  
            if($sort['direction']){  
                array_multisort($arrSort[$sort['field']], constant($sort['direction']), $rows);  
            }

            foreach ($rows as $k => $v) {
                $rows[$k]['indexs']=$k+1;
                $rows[$k]['per']=sprintf('%.2f',$v['nums']*100/$total);
            }
        }
        $this->assign('rows',$rows);
        return $this->fetch();
    }
}