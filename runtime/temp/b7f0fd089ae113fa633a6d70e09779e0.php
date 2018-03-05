<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"F:\www\hiv/app/admin\view\question\questionnaire_form.html";i:1520212672;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
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
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
        <div class="layui-form-item">
            <label class="layui-form-label">问卷名称</label>
            <div class="layui-input-3">
                <input type="text" name="title" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?>问卷名称" class="layui-input" value="<?php echo $info['title']; ?>">
            </div>
        </div>
    

        <div class="layui-form-item">
            <label class="layui-form-label">问卷描述</label>
            <div class="layui-input-3">
                <textarea placeholder="请输入问卷描述" class="layui-textarea" name="description"><?php echo $info['description']; ?></textarea>
            </div>
        </div>

        <?php if(!empty($info)): ?>
		<input type="hidden" value="<?php echo $info['id']; ?>" name="id">
        <?php endif; ?>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('questionnaire'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    var $form;
    var form;
    var $;
    layui.use(['form', 'layer','laydate'], function () {
        form = layui.form;
        var laydate = layui.laydate;
        $ = layui.jquery;

        form.on('submit(submit)', function (data) {
            // 提交到方法 默认为本身
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post("", data.field, function (res) {
                layer.close(loading);
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        location.href = res.url;
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        })

        $form = $('.layui-form');
    });
</script>