<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"E:\www\hiv/app/home\view\pc\question.html";i:1520516936;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>艾检测</title>
<link href="__HOME__/pc/css/main.css" rel="stylesheet" type="text/css" />
<link href="__HOME__/pc/css/test.css" rel="stylesheet" type="text/css" />
<style>
    .hide_class{
        display: none;
    }
</style>
</head>

<body>
	<div class="main">
		<div class="test_main">
			<div class="title">艾检测温馨提示您</div>
			<div class="con">
				<p>为了后续争取公益伙伴的支持以提升我们的服务，我们恳请您参加一项问卷调查，这会帮到我们很多，对您的支持，我们不胜感激!</p>
				<p>您的问卷信息我们将通过特定算法加密处理并承若严格保密，请放心答题。</p>
				<p style="color:red;">本套问卷：<?php echo $questions[0]['title']; ?></p>
			</div>
			<div class="test">
				<form action="<?php echo url('question'); ?>" method="post">
					<input type="hidden" value="<?php echo $questions[0]['questionnaire_id']; ?>" name="questionnaire_id">
					<div class="test_title">
						<font style="float: left;"><input type="button" value="返回" style="background-color: #999;" onclick="history.back();"></font>
						<font><input type="submit" onclick="return submits();" value="提交"></font>
					</div>
							
					<div class="test_content_nr">
						<ul>
							<?php if(is_array($questions) || $questions instanceof \think\Collection || $questions instanceof \think\Paginator): $mm = 0; $__LIST__ = $questions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($mm % 2 );++$mm;?>
							<li id="<?php echo $m['question_id']; ?>" class="question_show_checked">
								<div class="test_content_nr_tt">
									<i><?php echo $mm; ?></i>
									<font><?php echo $m['question']; if($m['optionsList'][0]['type'] == 'checkbox'): ?>(多选)<?php endif; ?></font>
								</div>
								<div class="test_content_nr_main">
									<ul>
										<?php if(is_array($m['optionsList']) || $m['optionsList'] instanceof \think\Collection || $m['optionsList'] instanceof \think\Paginator): $nn = 0; $__LIST__ = $m['optionsList'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($nn % 2 );++$nn;?>
										<li class="option">
											<?php if($n['type'] == 'radio'): ?>
											<input class="radioOrCheck" name="prefix<?php echo $m['question_id']; ?>" type="radio" value="<?php echo $nn-1; ?>" turn_id="<?php echo $n['turn_id']; ?>"/>
											<?php elseif($n['type'] == 'checkbox'): ?>
											<input class="radioOrCheck" name="prefix<?php echo $m['question_id']; ?>[]" value="<?php echo $nn-1; ?>" type="checkbox" turn_id="<?php echo $n['turn_id']; ?>"/>
											<?php endif; ?>
											<label for="0_answer_1_option_1">
												<?php echo $nn; ?>.<p class="ue" style="display: inline;"><?php echo $n['text']; ?></p>
											</label>
										</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</form>
			</div>
		</div>
		<div class="foot"></div>
	</div>

	<script src="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/js/jquery.min.js"></script>
	<script src="__HOME__/pc/js/layer/layer.js"></script>
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
                        $(".test_content_nr ul").children().eq(i).removeClass('hide_class');
                    }
                }

                //后隐藏现在需要隐藏的
                var turn_to_index=previous_index=$("#"+turn_id).index();
                for(i=this_index+1;i<turn_to_index;i++){
                    $(".test_content_nr ul").children().eq(i).addClass('hide_class');
                }
            }else{
                //直接开始隐藏
                if(previous_index!=''){
                    for(i=this_index+1;i<previous_index;i++){
                        $(".test_content_nr ul").children().eq(i).removeClass('hide_class');
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
                    var selectedLength=$el.find('.option input:checked').length;
                    if(selectedLength==0){
                        status=false;
                        layer.msg('存在选择题未作答！',{icon:2});
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
							layer.msg(res.msg,{icon:2},function(){
	                   	   		layer.open({
									type: 2,
									title: '艾检测用户登录中心',
									shadeClose: true,
									shade: false,
									maxmin: true, //开启最大化最小化按钮
									area: ['1100px', '70%'],
									content: "<?php echo url('user/login/index'); ?>?sence=question"
						    	});
	                   	   	});
							status=false;
						}
					}
				});
			}
			return status;
		}
	</script>
</body>
</html>
