<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"F:\www\hiv/app/home\view\mobile\require.html";i:1520412742;}*/ ?>
<html style="font-size: 50px;">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="keywords" content="中国最高性价比的保险，大象保险">
    <meta name="description" content="大象保险是国内首个保险特卖平台，致力于打造中国最高性价比的保险产品。">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>中国平安-防艾险</title>
    <link rel="stylesheet" type="text/css" href="__HOME__/mobile/css/pingan/tmpV301.css">
    <link rel="stylesheet" type="text/css" href="__HOME__/mobile/css/pingan/bzDialog.css">
    <link rel="stylesheet" type="text/css" href="__HOME__/mobile/css/pingan/mobiscroll.custom-2.17.0.min.css">
    <link rel="stylesheet" type="text/css" href="__HOME__/mobile/css/pingan/meDialog.css">
    <link rel="stylesheet" href="__HOME__/mobile/css/pingan/customizeInput.css" type="text/css">
    <link rel="stylesheet" href="__HOME__/mobile/css/pingan/Global.css" type="text/css">
    <link href="__HOME__/mobile/css/pingan/style.css" rel="stylesheet" type="text/css">
    <link href="__HOME__/mobile/css/pingan/mod_address_slide.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="__HOME__/mobile/css/pingan/require.css" type="text/css">
</head>
<body>
    <header>
        <img onclick="history.go(-1);" src="__HOME__/mobile/images/qbBack.png">
        <h3>中国平安-防艾险</h3>
    </header>
    <div style="width:100%;height:0.82rem;"></div>
    <form id="onlineForm" method="post" action="require.php">
        <div class="bg">
            <div class="title c3d gwNav">
                <h1>被保人信息填写</h1>
                <h2>
                    <span>投被保人为同一人</span>
                </h2>
            </div>
            
            <div style="padding:10px 15px" id="sameperson">
                <div class="infoWrapper">
                    <div class="infoTitle">姓　　名</div>
                    <div class="infoContent">
                        <input name="truename" id="truename" placeholder="请填写被保人的真实姓名">
                    </div>
                </div>
                
                <div class="infoWrapper">
                    <div class="infoTitle">身份证号</div>
                    <div class="infoContent">
                        <input type="text" name="idcard" id="idcard" placeholder="请填写被保人的身份证号">
                    </div>
                </div>
                
                <div class="infoWrapper">
                    <div class="infoTitle">手机号码</div>
                    <div class="infoContent">
                        <input type="text" name="phone" id="phone" placeholder="请填写投保人的手机号码">
                    </div>
                </div>
                
                <div class="infoWrapper">
                    <div class="infoTitle">验&nbsp;证&nbsp;码</div>
                    <div class="infoContent" style="position:relative">
                        <div id="getVerify" onclick="getCode();">获取验证码</div>
                        <input type="text" name="code" id="code" placeholder="请填写验证码" style="width:68%">
                    </div>
                </div>
                
                <div class="infoWrapper" data-monitor="effectiveDate">
                    <div class="infoTitle">生效日期</div>
                    <div class="infoContent">
                        <span id="fromTime" style="color:#888">自<?php echo $start_time; ?>起</span>
                        <span id="toTime" style="color:#888">至<?php echo $end_time; ?>止</span><br>   
                    </div>
                </div>
                <div class="infoWrapper">
                    <div class="infoTitle l-spacing">投保人</div>
                    <div class="infoContent">
                        本人
                    </div>
                </div>
                <div class="infoWrapper">
                    <div class="infoTitle l-spacing">受益人</div>
                    <div class="infoContent">
                        法定
                    </div>
                </div>
            </div>

            <div class="bBox">
                <div class="bBox1 marBt1">
                    <div class="checkboxOne">
                      <input type="checkbox" id="checkOnline" name="agree" value="1">
                      <label for="checkOnline"></label>
                    </div>
                    <div class="bTxt">
                        我已阅读并同意此保险的
                        <a href="">告知与声明</a>
                        <a href="">投保须知</a>
                        <a href="">保险条款</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="h50"></div>
        <footer id="doSub">
            <div class="fl">¥365元<font style="font-size: 12px;font-weight: normal;">(保费+附加服务费)</font></div>
            <div class="fr" onclick="payment();">立即支付</div>
        </footer>
    </form>

    <script type="text/javascript" src="__HOME__/mobile/js/jquery.min.js"></script>
    <script type="text/javascript" src="__STATIC__/plugins/layer_mobile/layer.js"></script>
        <script type="text/javascript">
            function payment(){
                var truename=$.trim($("#truename").val());
                var idcard=$.trim($("#idcard").val());
                var phone=$.trim($("#phone").val());
                var code=$.trim($("#code").val());
                var agree=$("input[name='agree']:checked").val();
                if(truename==''){
                    layer.open({content:'请输入被保人姓名！',skin: 'msg',time:3});
                    $("#truename").focus();
                    return;
                }
                var reg=<?php echo config("reg.idcard"); ?>;
                if(!reg.test(idcard)){
                    layer.open({content:'请输入被保人正确的身份证号！',skin: 'msg',time:3});
                    $("#idcard").focus();
                    return;
                }
                reg=<?php echo config("reg.phone"); ?>;
                if(!reg.test(phone)){
                    layer.open({content:'请输入被保人正确的手机号码！',skin: 'msg',time:3});
                    $("#phone").focus();
                    return;
                }
                if(code==''){
                    layer.open({content:'请输入验证码！',skin: 'msg',time:3});
                    $("#code").focus();
                    return;
                }
                if(agree!='1'){
                    layer.open({content:'请认真阅读相关声明公告、条款协议后勾选！',skin: 'msg',time:3});
                    return;
                }
                
                var data=$("form").serialize();
                $.ajax({
                    url: "<?php echo url('home/baoxian/toubao'); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {data:data},
                    success:function(res){
                        if(res.status>0){

                        }else{
                            layer.open({content:res.msg,skin: 'msg',time:3});
                            if(res.url!=''){
                                setTimeout(function(){
                                    window.location.href=res.url;
                                },3000);
                            }
                        }
                    }
                })
            }

            var isPhone = 1;
            function getCode(e){
                checkPhone(); //验证手机号码
                if(isPhone){
                    $.ajax({
                        url: "<?php echo url('base/base/getCode'); ?>",
                        type: 'GET',
                        dataType: 'json',
                        data: {type:'baoxian',phone:$("#phone").val()},
                        success:function(res){
                            layer.open({content:res.msg,skin: 'msg',time:3});
                            if(res.status==1){
                                resetCode(); //倒计时
                            }
                        }
                    })
                }else{
                    $('#phone').focus();
                }
                
            }

            //验证手机号码
            function checkPhone(){
                var phone = $('#phone').val();
                var pattern = <?php echo config('reg.phone'); ?>;
                isPhone = 1;
                if(phone == '') {
                    layer.open({content:'请输入手机号码！',skin: 'msg',time:3});
                    isPhone = 0;
                    return;
                }
                if(!pattern.test(phone)){
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
                        $("#getVerify").removeAttr('onclick').css('background-color', '#999').html(words);
                    }else{
                        clearInterval(timer);
                        $("#getVerify").attr('onclick','getCode()').css('background-color', '#e62f17').html('发送验证码');
                    }
                },1000);
            }
        </script>
</body>
</html>