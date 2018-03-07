<?php
namespace app\user\controller;
use think\Controller;
use clt\Leftnav;
class Login extends Common{
    public function _initialize(){
        parent::_initialize();
        if (session('user.id')) {
            $this->redirect('index/index');
        }
    }
    public function index(){
        if(request()->isPost()) {
            $table = db('users');
            $username = input('username');
            $code = input('code');
            if(!cache('login_'.$username)){
                return array('code' => 0, 'msg' => '验证码已过期！');
            }
            if(cache('login_'.$username)!=$code){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            cache('login_'.$username,NULL);
            $data=db('users')->where('username',$username)->find();
            if(empty($data)){
                $data=[
                    'username'=>$username,
                    'reg_time'=>time(),
                    'last_ip'=>getIp(),
                    'oauth'=>'self',
                    'last_login'=>time()
                ];
                $data['id']=db('users',[],false)->insertGetId($data);
            }
            session('user',$data);
            if(!empty(input('param.preferUrl'))){
                return array('code'=>1,'msg'=>'登录成功','url' =>input('param.preferUrl'),'sence'=>input('param.sence'));
            }else{
                return array('code'=>1,'msg'=>'登录成功','url' => url('index/myInfo'),'sence'=>input('param.sence'));
            }
        }else{
            $plugin = db('plugin')->where(['type'=>'login','status'=>1])->select();
            $this->assign('plugin', $plugin);
            $this->assign('title','会员登录');
            return $this->fetch($this->whereIs.'/'.'login');
        }
    }
    public function check($code){
        if (!captcha_check($code)) {
            return false;
        } else {
            return true;
        }
    }

    public function reg(){
        if(request()->isPost()) {
            $data = input('post.');
            $code = $data['vercode'];
            if(!$this->check($code)){
                return array('code' => 0, 'msg' => '验证码错误');
            }
            $is_validated = 0 ;
            if(is_email($data['email'])){
                $is_validated = 1;
                $map['email_validated'] = 1;
                $map['email'] = $data['email']; //邮箱注册
            }
            if(is_mobile_phone($data['email'])){
                $is_validated = 1;
                $map['mobile_validated'] = 1;
                $map['mobile'] = $data['email']; //手机注册
            }
            if($is_validated != 1){
                return array('code'=>0,'msg'=>'请用手机号或邮箱注册');
            }
            if(!$data['username'] || !$data['password']){
                return array('code'=>-1,'msg'=>'请输入昵称或密码');
            }
            //验证两次密码是否匹配
            if($data['password'] != $data['password2']){
                return array('code'=>-1,'msg'=>'两次输入密码不一致');
            }
            //验证是否存在用户名
            if(get_user_info($data['email'],1)||get_user_info($data['mobile'],2)){
                return array('code'=>-1,'msg'=>'账号已存在');
            }
            $map['username'] = $data['username'];
            $map['password'] = md5($data['password']);
            $map['reg_time'] = time();
            $map['token'] = md5(time().mt_rand(1,99999));
            $id = db('users')->insertGetId($map);
            if($id === false){
                return array('code'=>-1,'msg'=>'注册失败');
            }
            $user = db('users')->field('id,username')->where("id", $id)->find();
            session('user',$user);
            return array('code'=>1,'msg'=>'注册成功','result'=>$user);
        }else {
            $plugin = db('plugin')->where(['type' => 'login', 'status' => 1])->select();
            $this->assign('plugin', $plugin);
            $this->assign('title', '会员注册');
            return $this->fetch();
        }
    }

    public function forget(){
        if(request()->isPost()) {
            $sender = input('email');
            $code =input('code');
            $inValid = true;  //验证码失效
            if(!$code){
                return array('code'=>-1,'msg'=>'请输入邮件验证码');
            }
            $data = session('validate_code');
            $timeOut = $data['time'];
            if($data['code'] != $code || $data['sender']!=$sender){
                $inValid = false;
            }
            $password = input('password');
            $password2 = input('password2');
            if($password != $password2){
                return array('code'=>-1,'msg'=>'两次输入密码不一致');
            }
            if(empty($data)){
                return array('code'=>-1,'msg'=>'请先获取验证码');
            }elseif($timeOut < time()){
                return array('code'=>-1,'msg'=>'验证码已超时失效');
            }elseif(!$inValid) {
                return array('status'=>-1,'msg'=>'验证失败,验证码有误');
            }else{
                $data['is_check'] = 1; //标示验证通过
                session('validate_code',$data);
                db('users')->where(['email'=>$sender])->update(['password'=>md5($password)]);
                return array('code'=>1,'msg'=>'密码找回成功！');
            }
        }else{
            $this->assign('title','找回密码');
            return $this->fetch();
        }
    }
    /**
     * 发送邮件验证码
     * @param $sender 接收人
     * @return json
     */
    public function sendEmail(){
        if(request()->isPost()) {
            $sender = input('email');
            $sms_time_out = 180;
            //获取上一次的发送时间
            $send = session('validate_code');
            if (!empty($send) && $send['time'] > time() && $send['sender'] == $sender) {
                //在有效期范围内 相同号码不再发送
                return json(['code' => -1, 'msg' => '规定时间内,不要重复发送验证码']);
            }
            $code = mt_rand(1000, 9999);
            //检查是否邮箱格式
            if (!is_email($sender)) {
                return json(['code' => -1, 'msg' => '邮箱码格式有误']);
            }
            $send = send_email($sender, '验证码', '您好，你的验证码是：' . $code);
            if ($send) {
                $info['code'] = $code;
                $info['sender'] = $sender;
                $info['is_check'] = 0;
                $info['time'] = time() + $sms_time_out; //有效验证时间
                session('validate_code', $info);
                return json(['code' => 1, 'msg' => '验证码已发送，请注意查收']);
            }else{
                return array('code' => -1, 'msg' => '验证码发送失败,请联系管理员');
            }
        }else{
            return json(['code' => -1, 'msg' => '非法请求']);
        }
    }
}