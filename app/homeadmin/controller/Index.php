<?php
/**
 * @Author: siyizhen
 * @emial:  1193814298@qq.com
 * @Date:   2018-01-09 10:04:04
 * @Last Modified by:   siyizhen
 * @Last Modified time: 2018-02-26 15:55:26
 */
namespace app\homeadmin\controller;
use think\Db;
use think\Request;
use think\Controller;

class Index extends Controller{
	protected $role_id;

	public function _initialize(){
        // dump($_SESSION);
        // dump($_COOKIE);exit;
		if(empty(session('aid'))&&empty(cookie('aid'))) {
            $this->redirect('login/login');
        }
        if(!empty(session('aid'))){
        	$this->aid=session('aid');
        	$this->role_id=session('role_id');
        }else{
        	if(!empty(cookie('aid'))){
        		$this->aid=cookie('aid');
        		$this->role_id=cookie('role_id');
        	}
        }
        if($this->role_id==1){
            $this->role_id=config('role_root');
        }
	}

	protected $vctArr=[];
    public function getVctArr($role_id){
        $rows=db('role',[],false)->field('id,pid')->where('pid',$role_id)->select();
        if(!empty($rows)){
            foreach ($rows as $k => $v) {
                array_push($this->vctArr,$v['id']);
                $this->getVctArr($v['id']);
            }
        }
    }

    public function getAllVct(){
        $this->getVctArr(config('role_root'));
        array_push($this->vctArr,config('role_root'));
        return $this->vctArr;
    }

	public function add(){
		if(request()->isAjax()){
			$data=input('param.');
			$data['addtime'] = time();
            foreach ($data as $k => $v) {
                $data[$k]=trim($v);
            }
            if(!empty($data['visited_time'])){
                $data['visited_time']=strtotime($data['visited_time']);
            }
            if(!empty($data['last_jiance_time'])){
                $data['last_jiance_time']=strtotime($data['last_jiance_time']);
            }

            if(!in_array($this->role_id,$this->getAllVct())){
                $data['role_id']=config('role_root');
                $data['aid']=config('role_root_admin_id');
            }else{
                $data['role_id']=$this->role_id;
                $data['aid']=$this->aid;
            }

            if(!empty($data['result_image'])){
                $posstart = strpos($data['result_image'], '/') + 1;
                $posend = strpos($data['result_image'], ';');
                $ext = substr($data['result_image'], $posstart,$posend - $posstart);
                $imageArr = explode(',',$data['result_image']);

                if(!empty($imageArr)){
                    $path=__PUBLIC__.'/uploads/result_image';
                    if(!is_dir('.'.$path)){
                        mkdir('.'.$path);
                        chmod('.'.$path,777);
                    }
                    $path=$path.'/'.date('Ymd');
                    if(!is_dir('.'.$path)){
                        mkdir('.'.$path);
                        chmod('.'.$path,777);
                    }

                    $data['result_image']=$path.'/'.date('His').'_'.$data['phone'].'.'.$ext;
                    file_put_contents('.'.$data['result_image'],base64_decode($imageArr[1]));
                }
            }

            $addressArr=explode(' ',$data['address']);
            $data['sheng']=$addressArr['0'];
            $data['shi']=$addressArr['1'];
            $data['qu']=$addressArr['2'];

            $id=db('vct',[],false)->insertGetId($data);

            //判断是否需要填调查问卷
            $where=[
                'role_id'=>$this->role_id,
                'renqun_shuxing'=>$data['renqun_shuxing'],
                'is_use'=>2
            ];
            //判断是否有问卷
            $questionnaire_id=db('questionnaires')->where($where)->value('id');
            //判断问卷是否有题目
            $questions=db('questions')->where('questionnaire_id',$questionnaire_id)->select();
            if(!empty($questionnaire_id) && !empty($questions)){
                $arr=['status'=>1,'msg'=>'提交成功,请您完成问卷调查！','id'=>$id];
            }else{
                $arr=['status'=>2,'msg'=>'提交成功,请您签名确认！','id'=>$id];
            }
            
            return json($arr);
		}
        if(!in_array($this->role_id,$this->getAllVct())){
            $role_id=config('role_root');
        }else{
            $role_id=$this->role_id;
        }
        $zixundian=db('role')->where('id',$role_id)->value('name');
        $this->assign('zixundian',$zixundian);

		$fromQudaoArr=[];
		foreach (fromQudao() as $k => $v) {
			$fromQudaoArr[$k-1]['value']=$k;
			$fromQudaoArr[$k-1]['text']=$v;
		}
		$this->assign('fromQudaoData',json_encode($fromQudaoArr));

		$visitedReasonArr=[];
		foreach (visitedReason() as $k => $v) {
			$visitedReasonArr[$k-1]['value']=$k;
			$visitedReasonArr[$k-1]['text']=$v;
		}
		$this->assign('visitedReasonData',json_encode($visitedReasonArr));

		$baolouReasonArr=[];
		foreach (baolouReason() as $k => $v) {
			$baolouReasonArr[$k-1]['value']=$k;
			$baolouReasonArr[$k-1]['text']=$v;
		}
		$this->assign('baolouReasonData',json_encode($baolouReasonArr));

		$renqunShuxingArr=[];
		foreach (renqunShuxing() as $k => $v) {
			$renqunShuxingArr[$k-1]['value']=$k;
			$renqunShuxingArr[$k-1]['text']=$v;
		}
		$this->assign('renqunShuxingData',json_encode($renqunShuxingArr));

        $lastJianceJiGouArr=[];
        foreach (lastJianceJiGou() as $k => $v) {
            $lastJianceJiGouArr[$k-1]['value']=$k;
            $lastJianceJiGouArr[$k-1]['text']=$v;
        }
        $this->assign('lastJianceJiGouData',json_encode($lastJianceJiGouArr));

        $queZhengDanweiArr=[];
        foreach (queZheng() as $k => $v) {
            $queZhengDanweiArr[$k-1]['value']=$k;
            $queZhengDanweiArr[$k-1]['text']=$v;
        }
        $this->assign('queZhengDanWeiData',json_encode($queZhengDanweiArr));

        $chuangkouqiArr=[];
        foreach (chuangKouQi() as $k => $v) {
            $chuangkouqiArr[$k-1]['value']=$k;
            $chuangkouqiArr[$k-1]['text']=$v;
        }
        $this->assign('chuangkouqiData',json_encode($chuangkouqiArr));

        $giftArr=[];
        foreach (gift() as $k => $v) {
            $giftArr[$k-1]['value']=$k;
            $giftArr[$k-1]['text']=$v;
        }
        $this->assign('giftData',json_encode($giftArr));

        $hunYinArr=[];
        foreach (hunYin() as $k => $v) {
            $hunYinArr[$k-1]['value']=$k;
            $hunYinArr[$k-1]['text']=$v;
        }
        $this->assign('hunYinData',json_encode($hunYinArr));

        $zhiYeArr=[];
        foreach (zhiYe() as $k => $v) {
            $zhiYeArr[$k-1]['value']=$k;
            $zhiYeArr[$k-1]['text']=$v;
        }
        $this->assign('zhiYeData',json_encode($zhiYeArr));

        $shouRuArr=[];
        foreach (shouRu() as $k => $v) {
            $shouRuArr[$k-1]['value']=$k;
            $shouRuArr[$k-1]['text']=$v;
        }
        $this->assign('shouRuData',json_encode($shouRuArr));

        $xueLiArr=[];
        foreach (xueLi() as $k => $v) {
            $xueLiArr[$k-1]['value']=$k;
            $xueLiArr[$k-1]['text']=$v;
        }
        $this->assign('xueLiData',json_encode($xueLiArr));

        $mingZuArr=[];
        foreach (mingZu() as $k => $v) {
            $mingZuArr[$k-1]['value']=$k;
            $mingZuArr[$k-1]['text']=$v;
        }
        $this->assign('mingZuData',json_encode($mingZuArr));

        $liveTimeArr=[];
        foreach (liveTime() as $k => $v) {
            $liveTimeArr[$k-1]['value']=$k;
            $liveTimeArr[$k-1]['text']=$v;
        }
        $this->assign('liveTimeData',json_encode($liveTimeArr));

        $schoolCityArr=json_decode(file_get_contents('./public/static/common/js/testt.json'),true);
        $this->assign('schoolCity',json_encode($schoolCityArr));

        $dataOptionStr='{&quot;type&quot;:&quot;date&quot;,&quot;beginYear&quot;:2000,&quot;endYear&quot;:'.(date('Y')+10).'}';
        $this->assign('dataOptionStr',$dataOptionStr);
        $this->assign('info',NULL);
		return view('add');
	}

    public function getSchool(){
        $province=input('param.province');
        $city=input('param.city');
        $schoolCityArr=json_decode(file_get_contents('./public/static/common/js/testt.json'),true);
        $schoolArr=[];
        foreach ($schoolCityArr as $k => $v) {
            if($v['value']==$province){
                foreach ($v['children'] as $m => $n) {
                    if($n['value']==$city){
                        $schoolArr=$n['children'];
                    }
                }
            }
        }
        $data=[];
        foreach ($schoolArr as $k => $v) {
            $data[$k]['value']=$data[$k]['text']=$v['text'];
        }
        return json($data);
    }

    public function signature(){
        if(request()->isAjax()){
            $id=input('param.id');
            $infos=db('vct',[],false)->where('id',$id)->find();
            $phone=$infos['phone'];
            if(!empty($infos['signature_image']) && file_exists('.'.$infos['signature_image'])){
                unlink('.'.$infos['signature_image']);
            }
            $signature_image=input('param.signature_image/a');
            $imageArr=explode(';',$signature_image[0]);
            $imageArrExt=explode('/',$imageArr[0]);
            $ext=$imageArrExt[1];
            $path=__PUBLIC__.'/uploads/signature_image';
            if(!is_dir('.'.$path)){
                mkdir('.'.$path);
                chmod('.'.$path,777);
            }
            $path=$path.'/'.date('Ymd');
            if(!is_dir('.'.$path)){
                mkdir('.'.$path);
                chmod('.'.$path,777);
            }
            $path=$path.'/'.date('His').'_'.$phone.'.'.$ext;
            file_put_contents('.'.$path,base64_decode($signature_image[1]));
            $updateArr['signature_image']=$path;
            $res=db('vct',[],false)->where('id',$id)->update($updateArr);
            if($res){
                $arr=['status'=>1,'msg'=>'签名完成！'];
            }else{
                $arr=['status'=>0,'msg'=>'系统繁忙,请稍后再试！'];
            }
            return json($arr);
        }
        if(empty(input('param.id'))){
            return $this->show_message(['type'=>'warn','msg'=>'非法访问！','url'=>'add']);
        }
        $id=input('param.id');
        $info=db('vct',[],false)->where('id',$id)->find();
        $this->assign('title','尊敬的'.$info['username'].'，请您签字：');
        $this->assign('id',$id);
        return $this->fetch();
    }

    public function search(){
        if(request()->isAjax()){
            $searchVal=input('param.searchVal');
            $where['a.username|a.truename|a.phone']=['like',"%$searchVal%"];
            if($this->aid!=1){//超级管理员显示所有
                if($role_id==''){
                    $role_id=$this->role_id;
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
            }

            $rows=Db::table(config('database.prefix') . 'vct')->alias('a')
                ->join(config('database.prefix') . 'role b', 'a.role_id = b.id', 'left')
                ->join(config('database.prefix') . 'admin c','a.aid=c.admin_id')
                ->where($where)
                ->field('a.*,b.name as zixundian,c.username as admin_name')
                ->order('a.addtime desc')
                ->select();
            foreach ($rows as $k=>$v){
                $rows[$k]['addtime'] = date('Y/m/d H:i',$v['addtime']);
                $reply_id=db('reply',[],false)->where('vct_id',$v['id'])->value('id');
                if(empty($reply_id)){
                    $rows[$k]['reply_id']='';
                }else{
                    $rows[$k]['reply_id']=$reply_id;
                }
            }
            if(!empty($rows)){
                $arr=['status'=>1,'data'=>$rows];
            }else{
                $arr=['status'=>0];
            }
            return json($arr);
        }
        return $this->fetch();
    }

    public function searchPhone(){
        $phone=input('param.phone');
        $rows=db('vct',[],false)->alias('a')->where('phone',$phone)->order('addtime desc')->select();
        $nums=0;
        $info=[];
        if(!empty($rows)){
            $nums=count($rows);
            $info=$rows[0];
            $info['last_jiance_time_show']=date('Y-m-d',$info['visited_time']);
            $info['last_jiance_jigou_show']=db('role')->where('id',$info['role_id'])->value('name');
        }
        if(!empty($info)){
            $arr=['status'=>1,'data'=>$info,'nums'=>$nums];
        }else{
            $arr=['status'=>0];
        }
        return json($arr);
    }

    public function getJianceBianHao(){
        $renqun_shuxing=input('param.renqun_shuxing');
        $where=[
            'role_id'=>$this->role_id,
            'renqun_shuxing'=>$renqun_shuxing
        ];
        $max_bianhao_number=db('vct',[],false)->where($where)->max('bianhao_number');
        $bianhao_number=(int)$max_bianhao_number+1;

        unset($where);
        $where['zixundian']=$this->role_id;
        $where['renqun_shuxing']=$renqun_shuxing;
        $prefix=db('bianhao_prefix')->where($where)->value('prefix');
        if(strlen($bianhao_number)<4){
            $jiance_bianhao=trim($prefix).str_repeat('0',4-strlen($bianhao_number)).$bianhao_number;
        }else{
            $jiance_bianhao=trim($prefix).$bianhao_number;
        }
        $arr=['status'=>1,'jiance_bianhao'=>$jiance_bianhao,'bianhao_number'=>$bianhao_number];
        return json($arr);
    }

    public function loginOut(){
        cookie('aid',null);
        cookie('username',null);
        cookie('group_id',null);
        cookie('role_id',null);

        session('username',null);
        session('aid',null);
        session('group_id',null);
        session('role_id',null);

        session(null);
        $arr=['status'=>1,'msg'=>'退出成功！'];
        return json($arr);
    }

    public function question(){
        if(empty(input('param.id'))){
            return $this->show_message(['type'=>'warn','msg'=>'非法访问！','url'=>'add']);
        }
        $renqun_shuxing=db('vct',[],false)->where('id',input('param.id'))->value('renqun_shuxing');
        $where=[
            'role_id'=>$this->role_id,
            'renqun_shuxing'=>$renqun_shuxing,
            'is_use'=>2
        ];
        $questionnaireInfo=db('questionnaires')->where($where)->order('id desc')->field('id')->find();
        $questionnaire_id=$questionnaireInfo['id'];

        $rows=db('questions',[],false)->alias('a')->where('a.questionnaire_id',$questionnaire_id)->field('a.id as question_id,a.*')->order('sort asc')->select();
        foreach ($rows as $k => $v) {
            $rows[$k]['optionsList']=json_decode($v['options'],true);
        }
        $this->assign('questions',$rows);
        return $this->fetch();
    }

    public function questionInput(){
        $data=input('param.');
        $arr['questionnaire_id']=$data['questionnaire_id'];
        $arr['vct_id']=$data['vct_id'];
        unset($data['questionnaire_id'],$data['vct_id']);
        $arrs=[];
        foreach ($data as $k => $v) {
            $key=substr($k,6);
            if(is_array($v)){
                $arrs[$key]=implode(',',$v);
            }else{
                $arrs[$key]=$v;
            }
        }
        $arr['reply']=json_encode((object)$arrs);
        $num=db('reply',[],false)->where('vct_id',$arr['vct_id'])->count('id');
        if($num){
            db('reply',[],false)->where('vct_id',$arr['vct_id'])->update($arr);
        }else{
            db('reply',[],false)->insert($arr);
        }
        $param=[
            'type'=>'success',
            'msg'=>'感谢您的支持！请您签名确认。',
            'paramStr'=>'?id='.$arr['vct_id'],
            'url'=>'signature',
        ];
        return $this->show_message($param);
    }

    public function questionUpdate(){
        $reply_id=input('param.reply_id');
        $answerRow=db('reply')->where('id',$reply_id)->find();
        $replyRow=json_decode($answerRow['reply'],true);
        foreach ($replyRow as $k => $v) {
            $replyRow[$k]=explode(',',$v);
        }
        $rows=db('questions')->where('questionnaire_id',$answerRow['questionnaire_id'])->select();
        foreach ($rows as $k => $v) {
            $rows[$k]['optionsList']=json_decode($v['options'],true);
            $rows[$k]['question_id']=$v['id'];
        }
        $this->assign('replyRow',$replyRow);
        $this->assign('questions',$rows);
        $this->assign('answerRow',$answerRow);
        return $this->fetch();
    }

    public function questionUpdateDo(){
        $data=input('param.');
        $arr['questionnaire_id']=$data['questionnaire_id'];
        $arr['vct_id']=$data['vct_id'];
        unset($data['questionnaire_id'],$data['vct_id']);
        $arrs=[];
        foreach ($data as $k => $v) {
            $key=substr($k,6);
            if(is_array($v)){
                $arrs[$key]=implode(',',$v);
            }else{
                $arrs[$key]=$v;
            }
        }
        $arr['reply']=json_encode((object)$arrs);
        db('reply',[],false)->where('vct_id',$arr['vct_id'])->update($arr);
        $param=[
            'type'=>'success',
            'msg'=>'问卷更新成功！',
            'paramStr'=>'',
            'url'=>'add',
        ];
        return $this->show_message($param);
    }

    public function show_message($param){
        $this->assign('param',$param);
        return $this->fetch('show_message');
    }
}