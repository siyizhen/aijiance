<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"F:\www\hiv/app/home\view\mobile\question.html";i:1520499420;s:50:"F:\www\hiv/app/home\view\mobile\header_source.html";i:1520564604;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,viewport-fit=cover">
        <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
<link rel="stylesheet" href="__HOME__/mobile/css/weui.css">
<link rel="stylesheet" href="__HOME__/mobile/css/mobile.css">
<link rel="stylesheet" href="__HOME__/mobile/css/jquery-weui.min.css">
<link rel="stylesheet" href="__HOME__/mobile/css/font-awesome.min.css">
<style>
	.my_select{width: 31%;height:27px;line-height: 27px;}
	.weui-tabbar{position: fixed;}
	.weui-article,.weui-panel{margin-bottom: 60px;}
</style>
        <style>
			.hide_class{display: none;}
			.forms{margin-bottom: 60px;}
        </style>
    </head>
    <body>
    	<form action="<?php echo url('question'); ?>" method="post" class="forms">
    		<?php if(is_array($questions) || $questions instanceof \think\Collection || $questions instanceof \think\Paginator): $mm = 0; $__LIST__ = $questions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($mm % 2 );++$mm;?>
    		<div id="<?php echo $m['question_id']; ?>" class="question_show_checked">
    			<div class="weui-cells__title"><?php echo $mm; ?>、<?php echo $m['question']; if($m['optionsList'][0]['type'] == 'checkbox'): ?>(多选)<?php endif; ?></div>
		    	<div class="weui-cells weui-cells_checkbox">
		    		<?php if(is_array($m['optionsList']) || $m['optionsList'] instanceof \think\Collection || $m['optionsList'] instanceof \think\Paginator): $nn = 0; $__LIST__ = $m['optionsList'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($nn % 2 );++$nn;?>
		            <label class="weui-cell weui-check__label" >
		                <div class="weui-cell__hd">
		                	<?php if($n['type'] == 'radio'): ?>
		                    <input type="radio" class="weui-check" name="prefix<?php echo $m['question_id']; ?>" value="<?php echo $nn-1; ?>" turn_id="<?php echo $n['turn_id']; ?>">
		                    <?php elseif($n['type'] == 'checkbox'): ?>
							<input type="checkbox" class="weui-check" name="prefix<?php echo $m['question_id']; ?>[]" value="<?php echo $nn-1; ?>" turn_id="<?php echo $n['turn_id']; ?>">
		                    <?php endif; ?>
		                    <i class="weui-icon-checked"></i>
		                </div>
		                <div class="weui-cell__bd">
		                    <p><?php echo $nn; ?>.<?php echo $n['text']; ?></p>
		                </div>
		            </label>
		            <?php endforeach; endif; else: echo "" ;endif; ?>
		        </div>
    		</div>
    		<?php endforeach; endif; else: echo "" ;endif; ?>
    		<input type="hidden" value="<?php echo $questions[0]['questionnaire_id']; ?>" name="questionnaire_id">
	        <input type="submit" class="weui-btn weui-btn_warn submit_btn" style="background-color: #09bb07;" value="提 交" onclick="return submits();">
    	</form>

    	<div class="weui-tabbar">
    <a href="<?php echo url('home/index/index'); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[index,about])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-home"></i>
        </span>
        <p class="weui-tabbar__label">主页</p>
    </a>
    <a href="<?php echo url('home/reagent/index',['catId'=>15]); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[Order,reagent,Question])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-shopping-cart"></i>
        </span>
        <p class="weui-tabbar__label">申请试剂</p>
    </a>
    <a href="<?php echo url('home/jiancedian/index',['catId'=>22]); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[jiancedian])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-star-o"></i>
        </span>
        <p class="weui-tabbar__label">预约检测</p>
    </a>
    <!-- <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-search"></i>
        </span>
        <p class="weui-tabbar__label">查结果</p>
    </a> -->
    <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-address-book"></i>
        </span>
        <p class="weui-tabbar__label">我的</p>
    </a>
</div>

    	<script type="text/javascript" src="__HOME__/mobile/js/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="__STATIC__/plugins/layer_mobile/layer.js"></script>
		<script type="text/javascript">
			//写的很好啊
	        var previous_index='';
	        $("input[type='radio']").change(function() {
	            var turn_id=$(this).attr('turn_id');
	            var this_index=$(this).parent().parent().parent().parent().index();
	            if(turn_id!=''){
	                //先显示以前
	                if(previous_index!=''){
	                    for(i=this_index+1;i<previous_index;i++){
	                        $(".forms").children().eq(i).removeClass('hide_class');
	                    }
	                }

	                //后隐藏现在需要隐藏的
	                var turn_to_index=previous_index=$("#"+turn_id).index();
	                for(i=this_index+1;i<turn_to_index;i++){
	                    $(".forms").children().eq(i).addClass('hide_class');
	                }
	            }else{
	                //直接开始隐藏
	                if(previous_index!=''){
	                    for(i=this_index+1;i<previous_index;i++){
	                        $(".forms").children().eq(i).removeClass('hide_class');
	                    }
	                }
	            }
	        });

	        function submits(){
				var status=true;
				$(".question_show_checked").each(function(index, el) {
					var $el=$(el);
	                if($el.hasClass('hide_class')){

	                }else{
	                    var selectedLength=$el.find('.weui-cell__hd input:checked').length;
	                    if(selectedLength==0){
	                        status=false;
	                        layer.open({content:'存在选择题未作答！',skin: 'msg',time:3});
	                        return false;
	                    }
	                }
				});
				if(status==true){
					//异步判断是否登录
					$.ajax({
						url: "<?php echo url('base/base/isLogin'); ?>",
						type: 'GET',
						dataType: 'json',
						data: {},
						async: false,
						success:function(res){
							if(res.status==0){
								layer.open({content:res.msg,skin: 'msg',time:3});
								setTimeout(function(){
									layer.open({
										type: 1,
										content: '<div class="weui-cells__title">艾检测用户登录中心</div><div class="weui-cells weui-cells_form"><div class="weui-cell weui-cell_vcode"><div class="weui-cell__hd"><label class="weui-label">帐号</label></div><div class="weui-cell__bd"><input class="weui-input" type="tel" id="username" placeholder="请输入手机号"></div><div class="weui-cell__ft"><button class="weui-vcode-btn" id="sendCode" onclick="getCode();">获取验证码</button></div></div><div class="weui-cell"><div class="weui-cell__hd"><label class="weui-label">验证码</label></div><div class="weui-cell__bd"><input class="weui-input" id="code" type="number" pattern="[0-9]*" placeholder="请输入验证码"></div></div><div class="weui-btn-area" style="width:85%;"><button class="weui-btn weui-btn_primary" onclick="login();">登 录</button></div></div>',
										anim: 'up',
										style: 'width: 90%;padding:10px;'
									});
								},2000)
								status=false;
							}
						}
					});
				}
				return status;
			}

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
	                return false;
	            }
	            if(!pattern.test(username)){
	                layer.open({content:'请输入手机号码！',skin: 'msg',time:3});
	                isPhone = 0;
	                return false;
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
	                    $("#sendCode").removeAttr('onclick').css({'background-color':'#999','color':'#FFF'}).html(words);
	                }else{
	                    clearInterval(timer);
	                    $("#sendCode").attr('onclick','getCode()').css({'background-color':'#FFF','color':'#3cc51f'}).val('获取验证码');
	                }
	            },1000);
	        }

	        function login(){
	            var reg = <?php echo config('reg.phone'); ?>;
	            if(!reg.test($.trim($("#username").val()))){
	                layer.open({content:'请输入正确的手机号码！',skin: 'msg',time:3});
	                return;
	            }
	            var data={username:$.trim($("#username").val()),code:$.trim($("#code").val())};

	            var _index=layer.open({type: 2,content: '登录中…'});
	            $.ajax({
	            	url: "<?php echo url('user/login/index'); ?>",
	            	type: 'POST',
	            	dataType: 'json',
	            	data: data,
	            	success:function(res){
	                	layer.open({content:res.msg,skin: 'msg',time:3});
	                	if(res.code>0){
	                		setTimeout(function(){
		                		layer.closeAll();
		                	},3000);
	                	}
	            	},
	            	complete:function(){
	            		layer.close(_index);
	            	}
	            })
	        }
		</script>
    </body>
</html>