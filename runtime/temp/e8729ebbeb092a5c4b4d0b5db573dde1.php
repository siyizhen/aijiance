<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"F:\www\hiv/app/home\view\pc\toubao.html";i:1520330286;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>艾检测</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="艾检测">
    <meta name="description" content="艾检测">
    <link rel="stylesheet" href="__HOME__/pc/public/index/layui/css/layui.css">
    <link rel="stylesheet" href="__HOME__/pc/public/index/css/global.css"> 
    <!--[if IE]>
    <script src="__HOME__/pc/public/index/js/html5.js"></script>
    <![endif]-->
    <style>
		.shengming{
			position: absolute;top:7px;left: 190px;
		}
		.shengming a{
			color: red;
			text-decoration: underline;
		}
    </style>
</head>
<body id="mar_body">
	<div class="my_info">
        <div class="layui-form">
        	<div class="layui-form-mid layui-word-aux" style="margin-left: 50px;color:#FF5F00 !important;">被保人信息填写 投被保人为同一人</div>
            <div class="layui-form-item">
                <label class="layui-form-label">姓名</label>
                <div class="layui-inline">
                    <input type="text" class="layui-input" name="truename" lay-verify="required" placeholder="请输入被保人姓名">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">身份证号码</label>
                <div class="layui-inline" style="width: 20%;">
                    <input type="text" class="layui-input" name="idcard" lay-verify="identity" placeholder="请输入被保人身份证号码">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">手机号码</label>
                <div class="layui-inline" style="width: 40%;">
                    <input type="text" class="layui-input" name="phone" id="phone" lay-verify="phone" placeholder="请输入被保人手机号" style="float: left;width: 50%;margin-right: 5px;">
                    <button style="height: 38px;line-height: 38px;" class="layui-btn layui-btn-sm layui-btn-normal" id="sendCode" onclick="getCode();">发送验证码</button>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">验证码</label>
                  <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="code" name="code" lay-verify="required" placeholder="请输入验证码">
                  </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">生效日期</label>
                  <div style="color:#999 !important;width: 450px;">
                  	自<?php echo $start_time; ?>起<br />
                  	至<?php echo $end_time; ?>止
                  </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">投保人</label>
                  <div class="layui-input-inline">
                  		<div class="layui-form-mid layui-word-aux">本人</div>
                  </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">受益人</label>
                  <div class="layui-input-inline">
                  		<div class="layui-form-mid layui-word-aux">法定</div>
                  </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                  <label class="layui-form-label">费用</label>
                  <div class="layui-input-inline">
                  		<div class="layui-form-mid layui-word-aux">￥365(保费+附加服务费)</div>
                  </div>
                </div>
            </div>
            <div class="layui-form-item">
			    <div class="layui-input-block" style="position: relative;">
			    	<input type="checkbox" name="agree" value="1" lay-skin="primary" title="我已阅读并同意此保险的"> 
			    	<div class="shengming">
			    		<?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
			    		<a href="javascript:shows(<?php echo $m['id']; ?>);"><?php echo strip_tags($m['title']); ?></a> 
						<?php endforeach; endif; else: echo "" ;endif; ?>
			    	</div>
			    </div>
			  </div>
            <div class="layui-form-item" style="margin-left: 50px;">
                <button class="layui-btn layui-btn-danger" lay-submit="" lay-filter="sub">下单投保</button>
            </div>
        </div>
    </div>

	<script src="__HOME__/pc/public/index/js/jquery-2.0.3.min.js"></script>
	<script src="__HOME__/pc/js/layer/layer.js"></script>
	<script src="__HOME__/pc/public/index/layui/layui.js"></script>
    <script type="text/javascript">
    	layui.use('form',function(){
        	var form=layui.form;
        });

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
	                    if(res.status==1){
	                        layer.msg(res.msg,{icon:1},function(){
	                        	resetCode(); //倒计时
	                        });
	                    }else{
	                        layer.msg(res.msg,{icon:2});
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
			var pattern = /^1[0-9]{10}$/;
			isPhone = 1;
			if(phone == '') {
				layer.msg('请输入手机号码',{icon:2});
				isPhone = 0;
				return;
			}
			if(!pattern.test(phone)){
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
            	if(typeof data.field.agree == 'undefined'){
            		layer.msg('请认真阅读相关声明公告、条款协议后勾选！',{icon:2});
            		return;
            	}
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post("<?php echo url('home/baoxian/toubao'); ?>",data.field,function(res){
                    layer.close(loading);
                    if(res.status > 0){
                    	layer.msg(res.msg,{icon:1},function(){
                    		//parent.location.reload();
                    	});
                    }else{
                        layer.msg(res.msg,{time:1000,icon:2});
                    }
                });
                return false;
            })
        })

	    function shows(ids){
	    	<?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
	    		if(ids==<?php echo $m['id']; ?>){
	    			var content='<?php echo $m['content']; ?>';
	    		}
	    	<?php endforeach; endif; else: echo "" ;endif; ?>
	    	layer.open({
				type: 1,
				area: ['900px', '80%'],
				content: content
			});
	    }
    </script>
</body>
</html>