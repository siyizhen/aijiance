<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"F:\www\hiv/app/user\view\pc\change_phone.html";i:1519897792;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info['description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
    <link rel="stylesheet" href="__HOME__/pc/public/index/layui/css/layui.css">
    <link rel="stylesheet" href="__HOME__/pc/public/index/css/global.css"> 
    <!--[if IE]>
    <script src="__HOME__/pc/public/index/js/html5.js"></script>
    <![endif]-->
</head>
<body id="mar_body">
	<div class="my_info">
        <div class="layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label">原始手机</label>
                <div class="layui-input-block">
                    <span class="my_zhanghao"><?php echo substr_replace(session('user.username'),'****',3,4)?></span>
                    <button class="layui-btn layui-btn-sm layui-btn-normal" id="sendCode" onclick="getCode();">发送验证码</button>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">验证码</label>
                  <div class="layui-input-inline">
                    <input type="text" name="code" class="layui-input" id="code" placeholder="请输入验证码">
                  </div>
                </div>
            </div>
            <input type="hidden" value="change_phone" name="type" id="type">
            <div class="layui-form-item" style="margin-left: 50px;">
                <button class="layui-btn" lay-submit="" lay-filter="sub">提 交</button>
            </div>
        </div>
    </div>

	<script src="__HOME__/pc/public/index/js/jquery-2.0.3.min.js"></script>
    <script src="__HOME__/pc/js/layer/layer.js"></script>
    <script src="__HOME__/pc/public/index/layui/layui.js"></script>
    <script type="text/javascript">
	    function getCode(){
            $.ajax({
                url: "<?php echo url('base/base/getCode'); ?>",
                type: 'GET',
                dataType: 'json',
                data: {type:$("#type").val()},
                success:function(res){
                    if(res.status==1){
                        layer.msg(res.msg,{icon:1});
                        resetCode(); //倒计时
                    }else{
                        layer.msg(res.msg,{icon:2});
                    }
                }
            })
	    }

	    //倒计时
	    function resetCode(){
			var second = 60;
	        var timer = null;
	        timer=setInterval(function(){
	            second-= 1;
	            if(second >0 ){
	            	var words=second+'秒后重新获取';
	                $("#sendCode").removeAttr('onclick').css('background-color', '#999').html(words);
	            }else{
	                clearInterval(timer);
	                $("#sendCode").attr('onclick','getCode()').css('background-color', '#1E9FFF').html('发送验证码');
	            }
	        },1000);
	    }

        layui.use('form', function () {
            var form = layui.form,$ = layui.jquery;
            // 登录提交监听
            form.on('submit(sub)', function (data) {
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post("<?php echo url('index/changePhone'); ?>",data.field,function(res){
                    layer.close(loading);
                    if(res.status > 0){
                        window.location.href=res.url;
                    }else{
                        layer.msg(res.msg,{time:1000,icon:2});
                    }
                });
                return false;
            })
        })
    </script>
</body>
</html>