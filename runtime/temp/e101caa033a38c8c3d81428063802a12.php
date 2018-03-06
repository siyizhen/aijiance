<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"E:\www\hiv/app/user\view\pc\login.html";i:1520253373;s:46:"E:\www\hiv/app/home\view\pc\common_header.html";i:1520340794;}*/ ?>
﻿<!DOCTYPE html>
<head>
	<meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8" />
	<title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info['description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/bootstrap.min.css" rel="stylesheet">
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/style.css" rel="stylesheet">
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/font-awesome.css" rel="stylesheet">
	<link href="__HOME__/pc/template/default_bootstrap/skin/js/slide/bootstrap-touch-slider.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="__HOME__/pc/css/index.css">
</head>
<body>
	<div class="hidden-xs">
		<div id="header" class="clearfix">
			<div class="">
				<div class="logo-box">
					<a href="<?php echo url('home/index/index'); ?>"><img src="__PUBLIC__<?php echo $sys['logo']; ?>" alt="<?php echo $sys['name']; ?>" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li <?php if($controller == index): ?>class="on"<?php endif; ?>><a href="<?php echo url('home/index/index'); ?>">网站首页</a></li>
						<li><a href="<?php echo url('home/baoxian/index'); ?>">防艾险</a></li>
						<li><a href="<?php echo url('home/question/question'); ?>">问卷中心</a></li>
						<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		                <li <?php if($controller == $vo['catdir']): ?>class="on"<?php endif; ?>>
		                    <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']]); ?>" title="<?php echo $vo['catname']; ?>-<?php echo $sys['name']; ?>"><?php echo $vo['catname']; ?></a>
		                </li>
		                <?php endforeach; endif; else: echo "" ;endif; ?>
						<li>
							<a href="<?php echo url('user/index/myInfo'); ?>">
								<?php if(empty(session('user'))): ?>
								个人中心
								<?php else: ?>
								<?php echo substr_replace(session('user.username'),'****',3,4); endif; ?>
								<span class="fa fa-angle-down"></span>
							</a>
							<div class="menu2" style="left:0;width: 100px;">
								<ul>
									<?php if(empty(session('user'))): ?>
									<li><a href="<?php echo url('user/login/index'); ?>">登录</a></li>
									<?php else: ?>
									<li><a href="<?php echo url('user/common/logout'); ?>">退出</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<style>
    body{background: #F2F2F2 !important;}
</style>
<link rel="stylesheet" href="__HOME__/pc/public/static/plugins/layui/css/layui.css">
<link rel="stylesheet" href="__HOME__/pc/public/static/user/css/style.css">
<link rel="stylesheet" href="__HOME__/pc/public/static/user/css/global.css">
<link rel="stylesheet" href="__HOME__/pc/public/static/user/css/style.css"> 

<div class="layui-container fly-marginTop" style="background: #F2F2F2 !important;">
    <div class="fly-panel fly-panel-user" pad20 style="background: #FFF !important;">
        <div class="layui-tab layui-tab-brief" lay-filter="user">
            <ul class="layui-tab-title">
                <li class="layui-this">手机号直接登录</li>
            </ul>
            <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                <div class="layui-tab-item layui-show">
                    <div class="layui-form layui-form-pane">
                        <form class="layui-form">
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">帐　号</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="username" name="username" value="" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="请输入手机号">
                                </div>
                                <input type="button" class="layui-btn layui-btn-normal" value="发送验证码" id="sendCode" onclick="getCode();" />
                            </div>
                            <div class="layui-form-item">
                                <label for="code" class="layui-form-label">验证码</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="code" name="code" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo input('param.preferUrl'); ?>" name="preferUrl"> 
                            <input type="hidden" value="<?php echo input('param.sence'); ?>" name="sence">
                            <div class="layui-form-item">
                                <input type="button" class="layui-btn" lay-submit lay-filter="sub" value="立即登录">
                            </div>
                            <div class="layui-form-item fly-form-app">
                                <span>或者使用社交账号登入</span>
                                    <a href="user/loginApi/login/oauth/qq.html" class="iconfont icon-wechat" title="微信登入" style="font-size: 18px;"></a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fly-footer">
    <p><?php echo $sys['name']; ?> © <?php echo $sys['copyright']; ?> All rights reserved.</p>
    <p>
        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" target="_blank"><?php echo $vo['catname']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </p>
</div>

<script src="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/js/jquery.min.js"></script>
<script src="__HOME__/pc/js/layer/layer.js"></script>
<script src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    layui.use('form', function () {
        var form = layui.form,$ = layui.jquery;
        // 登录提交监听
        form.on('submit(sub)', function (data) {
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post("<?php echo url('login/index'); ?>",data.field,function(res){
                layer.close(loading);
                if(res.code > 0){
                    layer.msg(res.msg,{time:1000,icon:1},function(){
                        if(res.sence=='question'){
                            parent.layer.closeAll();
                        }else{
                            location.href = res.url;
                        }
                    });
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                }
            });
            return false;
        })
    })
</script>

<script type="text/javascript">
        /*获取验证码*/
        var isPhone = 1;
        function getCode(e){
            checkPhone(); //验证手机号码
            if(isPhone){
                $.ajax({
                    url: "<?php echo url('base/base/getCode'); ?>",
                    type: 'GET',
                    dataType: 'json',
                    data: {type:'login',phone:$('#username').val()},
                    success:function(res){
                        if(res.status==1){
                            layer.msg(res.msg,{icon:1});
                            resetCode(); //倒计时
                        }else{
                            layer.msg(res.msg,{icon:2});
                        }
                    }
                })
            }else{
                $('#username').focus();
            }
            
        }

        //验证手机号码
        function checkPhone(){
            var username = $('#username').val();
            var pattern = <?php echo config('reg.phone'); ?>;
            isPhone = 1;
            if(username == '') {
                layer.msg('请输入手机号码',{icon:2});
                isPhone = 0;
                return;
            }
            if(!pattern.test(username)){
                layer.msg('请输入正确的手机号码',{icon:2});
                isPhone = 0;
                return;
            }
        }

        //倒计时
        function resetCode(){
            var second = 60;
            var timer = null;
            timer=setInterval(function(){
                second-= 1;
                if(second >0 ){
                    var words=second+'秒后重新获取';
                    $("#sendCode").removeAttr('onclick').css('background-color', '#999').val(words);
                }else{
                    clearInterval(timer);
                    $("#sendCode").attr('onclick','getCode()').css('background-color', '#1E9FFF').val('发送验证码');
                }
            },1000);
        }
    </script>
</body>
</html>
