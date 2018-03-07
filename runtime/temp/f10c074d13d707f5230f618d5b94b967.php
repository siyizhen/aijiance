<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:42:"F:\www\hiv/app/user\view\mobile\login.html";i:1520414668;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
<title>艾检测</title>
<script type="text/javascript" src="__HOME__/mobile/js/auto.js"></script>
<link rel="stylesheet" href="__HOME__/mobile/css/login/style.css"/>
</head>
<body style="background-color: #fafafa;">
<div class="cationBox">
	<div class="topTit">
        <h3>艾检测登录中心</h3>
    </div>
    <p><input type="text" placeholder="请输入电话号码" id="username"></p>
    <p>
        <input  class="text" type="text" placeholder="验证码" id="code">
        <input class="btn" type="button" value="获取验证码" style="text-indent:0;background-color: #ff8a01;" id="sendCode" onclick="getCode();">
    </p>

    <div class="sub"><input type="button" value="登录"></div>	
</div>

<script src="__HOME__/mobile/js/zepto.min.js"></script>
<script type="text/javascript" src="__STATIC__/plugins/layer_mobile/layer.js"></script>
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
                        layer.open({content:res.msg,skin: 'msg',time:3});
                        if(res.status==1){
                            resetCode(); //倒计时
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
                layer.open({content:'请输入手机号码！',skin: 'msg',time:3});
                isPhone = 0;
                return;
            }
            if(!pattern.test(username)){
                layer.open({content:'请输入手机号码！',skin: 'msg',time:3});
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
                    $("#sendCode").attr('onclick','getCode()').css('background-color', '#ff8a01').val('发送验证码');
                }
            },1000);
        }
</script>
</body>
</html>