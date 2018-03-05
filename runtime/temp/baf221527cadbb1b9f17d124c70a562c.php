<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"F:\www\hiv/app/admin\view\question\question_edit.html";i:1517994968;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo config('sys_name'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__STATIC__/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
    <link rel="stylesheet" href="__STATIC__/common/css/font.css" media="all">
</head>
<body class="skin-<?php if(!empty($_COOKIE['skin'])){echo $_COOKIE['skin'];}else{echo '0';setcookie('skin','0');}?>">
<style>
	.option-list{
		padding: 10px;
	    border: 3px dashed #eee;
	    min-height: 100px;
	}
	.option-item .options{
		display: inline-block;
	    box-sizing: border-box;
	    position: relative;
	    width: 75%;
	    margin-bottom: 10px;
	}
	.option-item .option-del {
	    position: absolute;
	    top: 12px;
	    right: -30px;
	    cursor: pointer;
	}
	.show_box_length{
		width: 110px;
		display: none;
	}

	.show_box_content{
		width: 110px !important;top:0 !important;
	}

    .input_length{
        width: 500px !important;
        display: inline-block;
    }

    .add_input_length{
        width: 120px !important;
        display: inline-block;
    }
</style>
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
    	<div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-1">
                <input type="text" name="sort" placeholder="<?php echo lang('pleaseEnter'); ?>排序" class="layui-input" value="<?php echo $info['sort']; ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">问题</label>
            <div class="layui-input-3">
                <input type="text" name="question" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?>问题" class="layui-input" value="<?php echo $info['question']; ?>">
            </div>
        </div>
    
        <div class="layui-form-item">
            <label class="layui-form-label">问卷描述</label>
            <div class="layui-input-6">
            	<a class="layui-btn layui-btn-danger add_options">
            		<span class="icon icon-plus"></span>&nbsp;添加选项
            	</a>
            	<div class="layui-unselect layui-form-select layui-form-selected show_box_length" id="show_box">
            		<dl class="layui-anim layui-anim-upbit layui-select-group show_box_content">
            			<dd lay-value="radio">单选项</dd>
            			<dd lay-value="checkbox">复选项</dd>
                        <dd lay-value="textarea">填空问答</dd>
            		</dl>
            	</div>
                <div class="option-list">
                	<?php if(is_array($optionsList) || $optionsList instanceof \think\Collection || $optionsList instanceof \think\Paginator): $i = 0; $__LIST__ = $optionsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;if($m['type'] == 'radio'): ?>
					<div class="option-item">
						<input name="-" type="radio" title=" ">
							<div class="options"> 
                                <input type="text" value="<?php echo $m['text']; ?>" class="layui-input input_length" placeholder="请输入选项文本"> 
                                <input type="text" value="<?php echo $m['turn_id']; ?>" placeholder="请输入跳题ID" class="layui-input add_input_length">
								<img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项"> 
							</div> 
					</div>
					<?php elseif($m['type'] == 'checkbox'): ?>
					<div class="option-item">
						<input type="checkbox">
							&nbsp;&nbsp;
							<div class="options">
								<input type="text" value="<?php echo $m['text']; ?>" class="layui-input input_length" placeholder="请输入选项文本">
                                <input type="text" value="<?php echo $m['turn_id']; ?>" placeholder="请输入跳题ID" class="layui-input add_input_length">
								<img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项">
							</div>
					</div>
                    <?php elseif($m['type'] == 'textarea'): ?>
                    <div class="option-item">
                        <div class="options">
                            <input type="textarea" class="layui-textarea layui-disabled" disabled="disabled">
                            <img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项">
                        </div>
                    </div>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <input type="hidden" name="question_type" id="question_type" value="<?php echo $optionsList[0]['type']; ?>">
        <input id="questionnaire_id" name="questionnaire_id" type="hidden" value="<?php echo $info['questionnaire_id']; ?>">

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('question'); ?>?questionnaire_id=<?php echo $info['questionnaire_id']; ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/javascript" src="__STATIC__/common/js/jquery.2.1.1.min.js"></script>
<script>
    var $form;
    var form;
    var $;
    layui.use(['form', 'layer','laydate'], function () {
        form = layui.form;
        var laydate = layui.laydate;
        $ = layui.jquery;
        var layer=layui.layer;

        form.on('submit(submit)', function (data) {
        	var question_type=$("#question_type").val();
            if(question_type!='textarea'){
                var lengths=$(".option-list").find('.option-item').length;
                if(lengths==0){
                    layer.msg('请添加问题选项！',{icon:2});
                    return;
                }
                if(!validate()){
                    return;
                }
            }

            addOptions();

            data.field.options=optionsVal;
            // 提交到方法 默认为本身
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post("", data.field, function (res) {
                layer.close(loading);
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        location.href = res.url+"?questionnaire_id=<?php echo input('param.questionnaire_id'); ?>";
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        })

        $form = $('.layui-form');

        $(".add_options").hover(function() {
        	$("#show_box").slideDown(200);
        }, function() {
            var status=true;
            $("#show_box").hover(function() {
                status=false;
            }, function() {
                $("#show_box").slideUp(200);
            });

            setTimeout(function(){
                if(status===true){
                    $("#show_box").slideUp(200);
                }
            },1000);
        });

        $("#show_box dl dd").click(function() {
        	var question_type=$("#question_type").val();
        	var types=$(this).attr('lay-value');
        	if(question_type!=''&&question_type!=types){
        		return;
        	}

            if(question_type=='textarea'){
                return;
            }

        	$("#question_type").val(types);

        	if(types=='radio'){
                var str='<div class="option-item"><input name="-" type="radio" title=" "><div class="options"> <input type="text" class="layui-input input_length" placeholder="请输入选项文本"> <input type="text" name="turn_id" placeholder="跳题ID" class="layui-input add_input_length"><img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项"> </div> </div>';
            }else if(types=='checkbox'){
                var str='<div class="option-item"><input type="checkbox">&nbsp;&nbsp;<div class="options"><input type="text" class="layui-input input_length" placeholder="请输入选项文本"> <input type="text" name="turn_id" placeholder="跳题ID" class="layui-input add_input_length"><img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项"></div></div>';
            }else if(types=='textarea'){
                var str='<div class="option-item"><div class="options"><input type="textarea" class="layui-textarea" disabled="disabled"><img class="option-del" src="__STATIC__/admin/images/btn-del.png" title="删除该选项"></div></div>';
            }

        	$(str).appendTo($(".option-list"));

        	form.render();

            dels();
        });
    });

    dels();
    function dels(){
        $(".option-del").click(function() {
            $(this).parent().parent().remove();
            var lengths=$(".option-list").find('.option-item').length;
            if(lengths==0){
                $("#question_type").val('');
            }
        });
    }

    function validate(){
        var state = true;

        $('.option-list .option-item').each(function(i){
            $this = $(this);
            if( !$this.find('input[type=text]').val() ){
                layui.layer.msg('请填写选项文本',{icon:2});
                state = state && false;
            }
        });

        return state;
    }

    var optionsVal;
    function addOptions(){
        var options = {};
        /* 循环选项，收集选项信息 */
        $('.option-list .option-item').each(function(i){
            $this = $(this);
            var type = $this.find('input').attr('type');
            var text = (type!='radio' && type!='checkbox')? '':$this.find('input.layui-input').val();
            var turn_id=$this.find('input.add_input_length').val();
            options[i] = {'type':type, 'text':text ,'turn_id':turn_id};
        });

        //序列化选项信息，写入到隐藏域#options中
        optionsVal = JSON.stringify(options);
    }
</script>