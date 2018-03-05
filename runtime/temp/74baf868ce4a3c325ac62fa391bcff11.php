<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"F:\www\hiv/app/admin\view\question\question.html";i:1520213380;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
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
	        <legend><?php echo lang('question'); ?>管理</legend>
	    </fieldset>
	    <div class="demoTable layui-form">
	    	<a href="<?php echo url('questionnaire'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?>问卷管理</a>
	        <a href="<?php echo url('questionAdd'); ?>?questionnaire_id=<?php echo input('param.questionnaire_id'); ?>" class="layui-btn">添加问题</a>
	        <button type="button" class="layui-btn layui-btn-danger" id="delAll">批量删除</button>
	    </div>
		<table class="layui-table" id="list" lay-filter="list"></table>
	</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>



<script type="text/html" id="action">
    <a href="<?php echo url('questionEdit'); ?>?id={{d.id}}&questionnaire_id={{d.questionnaire_id}}" class="layui-btn layui-btn-xs">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<script type="text/javascript">
	layui.use(['table','form','laydate'], function() {
        var table = layui.table,form = layui.form,$ = layui.jquery,laydate = layui.laydate;
        var tableIn = table.render({
            id: 'question',
            elem: '#list',
            url: '<?php echo url("question",["questionnaire_id"=>input("param.questionnaire_id")]); ?>',
            method: 'post',
            page:true,
            cols: [[
            	{checkbox: true, fixed: true},
                {field: 'index', title: '编号', width: 60, fixed: true,align: 'center'},
                {field: 'id', title: 'ID', width: 60, fixed: true,align: 'center'},
                {field: 'sort', title: '排序', width: 60, align: 'center'},
                {field: 'question', title: '问题', width: 600,align: 'center'},
                {fixed: 'right',width: 160, title: '操作',toolbar: '#action',align:'center'}
            ]],
            limit:10
        });

        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'del'){
                layer.confirm('您确定要删除该数据吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('questionDel'); ?>",{id:data.id},function(res){
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

        $('#delAll').click(function(){
            layer.confirm('确认要删除选中问题吗？', {icon: 3}, function(index) {
                layer.close(index);
                var checkStatus = table.checkStatus('question'); //test即为参数id设定的值
                var ids = [];
                $(checkStatus.data).each(function (i, o) {
                    ids.push(o.id);
                });
                if(ids.length<=0){
                    layer.msg('请选择要删除的数据！',{icon:2});
                    return;
                }
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post("<?php echo url('delAllQuestion'); ?>", {ids: ids}, function (data) {
                    layer.close(loading);
                    if (data.code === 1) {
                        layer.msg(data.msg, {time: 1000, icon: 1});
                        table.reload('question');
                    } else {
                        layer.msg(data.msg, {time: 1000, icon: 2});
                    }
                });
            });
        })
    })
</script>