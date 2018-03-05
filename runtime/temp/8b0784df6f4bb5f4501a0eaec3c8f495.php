<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"F:\www\hiv/app/user\view\pc\add_suggestion.html";i:1519955986;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info['description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
    <link rel="stylesheet" href="__HOME__/pc/public/index/layui/css/layui.css">
    <!--[if IE]>
    <script src="__HOME__/pc/public/index/js/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div class="layui-form" style="margin-top: 10px;">
		<div class="layui-form-item layui-form-text">
		    <label class="layui-form-label">内容</label>
		    <div class="layui-input-inline" style="width: 70%;">
				<textarea placeholder="请输入反馈内容" name="user_content" lay-verify="required" class="layui-textarea" style="height:150px;"></textarea>
		    </div>
		</div>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		    	<button class="layui-btn" lay-submit="" lay-filter="sub">提交反馈</button>
		    </div>
		</div>
	</div>
	<script src="__HOME__/pc/public/index/js/jquery-2.0.3.min.js"></script>
	<script src="__HOME__/pc/js/layer/layer.js"></script>
    <script src="__HOME__/pc/public/index/layui/layui.js"></script>
	<script type="text/javascript">
		layui.use('form', function () {
            var form = layui.form,$ = layui.jquery;
            // 登录提交监听
            form.on('submit(sub)', function (data) {
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post("<?php echo url('index/addSuggestion'); ?>",data.field,function(res){
                    layer.close(loading);
                    if(res.status > 0){
                    	layer.msg(res.msg,{icon:1},function(){
                    		parent.location.reload();
                    	});
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