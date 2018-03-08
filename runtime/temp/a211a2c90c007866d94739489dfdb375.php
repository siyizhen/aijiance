<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"F:\www\hiv/app/admin\view\message\index.html";i:1519960268;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
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
        <legend><?php echo lang('message'); ?><?php echo lang('list'); ?></legend>
    </fieldset>
    <div class="demoTable layui-form">
        <div class="layui-inline">
            <label class="layui-form-label" style="width: 85px;">用户是否已知</label>
            <div class="layui-input-inline" style="width: 150px;">
                <select id="is_read">
                    <option value="">请选择</option>
                    <?php $isReadArr=isRead();if(is_array($isReadArr) || $isReadArr instanceof \think\Collection || $isReadArr instanceof \think\Paginator): $n = 0; $__LIST__ = $isReadArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>"><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <input class="layui-input" name="key" id="key" placeholder="<?php echo lang('pleaseEnter'); ?>关键字">
        </div>
        <button class="layui-btn" onclick="search()" data-type="reload"><?php echo lang('search'); ?></button>
        <a href="<?php echo url('index'); ?>" class="layui-btn">显示全部</a>
        <button type="button" class="layui-btn layui-btn-danger" id="delAll">批量删除</button>
    </div>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/html" id="action">
    <a class="layui-btn layui-btn-xs" lay-event="answer">回复</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script>
    var tableIn,key,$;
    layui.use('table', function() {
        var table = layui.table;
        $ = layui.jquery;
        tableIn = table.render({
            id: 'message',
            elem: '#list',
            url: '<?php echo url("index"); ?>',
            method: 'post',
            page: true,
            cols: [[
                {checkbox: true, fixed: true},
                {field: 'indexs', title: '<?php echo lang("id"); ?>', width: 80,fixed: true},
                {field: 'username', title: '<?php echo lang("username"); ?>', width: 120},
                {field: 'user_content', title: '<?php echo lang("content"); ?>', width: 300},
                {field: 'user_addtime', title: '反馈时间', width: 170},
                {field: 'ip', title: '<?php echo lang("ip"); ?>', width: 100},
                {field: 'answer_time', title: '回复时间', width: 180},
                {field: 'answer_content', title: '回复内容', width: 300},
                {field: 'is_read', title: '用户是否已知', width: 120},
                {width: 120, align: 'center', toolbar: '#action'}
            ]],
            limit: 10 //每页默认显示的数量
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'del') {
                layer.confirm('您确定要删除该反馈吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('del'); ?>",{message_id:data.message_id},function(res){
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
            }else if(obj.event === 'answer'){
                layer.open({
                    type: 2,
                    title: '反馈回复',
                    shadeClose: true,
                    shade: false,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['893px', '350px'],
                    content: "<?php echo url('answerMessage'); ?>?id="+data.message_id
                });
            }
        });
        $('#delAll').click(function(){
            layer.confirm('确认要删除选中的反馈吗？', {icon: 3}, function(index) {
                layer.close(index);
                var checkStatus = table.checkStatus('message'); //test即为参数id设定的值
                var ids = [];
                $(checkStatus.data).each(function (i, o) {
                    ids.push(o.message_id);
                });
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post("<?php echo url('delall'); ?>", {ids: ids}, function (data) {
                    layer.close(loading);
                    if (data.code === 1) {
                        layer.msg(data.msg, {time: 1000, icon: 1});
                        tableIn.reload();
                    } else {
                        layer.msg(data.msg, {time: 1000, icon: 2});
                    }
                });
            });
        })
    });

    function search(){
        key = $('#key').val();
        tableIn.reload({
            where: {key: key,is_read:$("#is_read").val()}
        });
    }
</script>