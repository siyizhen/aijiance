<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"E:\www\hiv/app/admin\view\question\questionnaire.html";i:1520254522;s:42:"E:\www\hiv/app/admin\view\common\head.html";i:1515977464;s:42:"E:\www\hiv/app/admin\view\common\foot.html";i:1514860702;}*/ ?>
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
	        <legend><?php echo lang('questionnaire'); ?>管理</legend>
	    </fieldset>
	    <div class="demoTable layui-form">
	        <a href="<?php echo url('questionnaireAdd'); ?>" class="layui-btn">添加问卷</a>
	    </div>
		<table class="layui-table" id="list" lay-filter="list"></table>
	</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>



<script type="text/html" id="action">
	{{# if(d.origin_is_use == 1){ }}
	<a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="setDefault" act="set">
	设置应用
	</a>
	{{# }else{ }}
	<a class="layui-btn layui-btn-warm layui-btn-xs" lay-event="setDefault" act="cancel">
	取消应用
	</a>
	{{# } }}
    <a href="<?php echo url('tongJi'); ?>?questionnaire_id={{d.id}}" class="layui-btn layui-btn-primary layui-btn-xs">统计</a>
	<a href="<?php echo url('question'); ?>?questionnaire_id={{d.id}}" class="layui-btn layui-btn-normal layui-btn-xs">内容</a>
    <a href="<?php echo url('questionnaireEdit'); ?>?id={{d.id}}" class="layui-btn layui-btn-xs">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<script type="text/javascript">
	layui.use(['table','form','laydate'], function() {
        var table = layui.table,form = layui.form,$ = layui.jquery,laydate = layui.laydate;
        var tableIn = table.render({
            id: 'questionnaire',
            elem: '#list',
            url: '<?php echo url("questionnaire"); ?>',
            method: 'post',
            page:true,
            cols: [[
                {field: 'index', title: '编号', width: 60, fixed: true,align: 'center'},
                {field: 'title', title: '名称', width: 150,align: 'center'},
                {field: 'description', title: '描述', width: 350,align: 'center'},
                {field: 'addtime', title: '创建日期',width: 120,align: 'center'},
                {field: 'is_use', title: '是否应用',width: 100,align: 'center'},
                {fixed: 'right',width: 280, title: '操作',toolbar: '#action',align:'center'}
            ]],
            limit:10
        });

        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'del'){
                layer.confirm('您确定要删除该数据吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('questionnaireDel'); ?>",{id:data.id},function(res){
                        layer.close(loading);
                        if(res.code===1){
                            layer.msg(res.msg,{time:1000,icon:1});
                            tableIn.reload();
                        }else{
                            layer.msg(res.msg,{time:1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }else if(obj.event === 'setDefault'){
            	var that=$(this);
            	layer.confirm('您确定要操作此套问卷吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    var act=that.attr('act');
                    $.post("<?php echo url('questionnaireSetDefault'); ?>",{id:data.id,act:act},function(res){
                        layer.close(loading);
                        if(res.code===1){
                            layer.msg(res.msg,{time:1000,icon:1});
                            tableIn.reload();
                        }else{
                            layer.msg('操作失败！',{time:1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }
        });
    })
</script>