<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"E:\www\hiv/app/admin\view\send_msg\index.html";i:1520076394;s:42:"E:\www\hiv/app/admin\view\common\head.html";i:1515977464;s:42:"E:\www\hiv/app/admin\view\common\foot.html";i:1514860702;}*/ ?>
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
        <legend>消息/短信<?php echo lang('list'); ?></legend>
    </fieldset>
    <div class="demoTable layui-form" style="margin-top: 10px;">
        <div class="layui-inline">
            <label class="layui-form-label" style="width: 60px;">消息/短信</label>
            <div class="layui-input-inline" style="width: 100px;">
                <select id="type" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <?php $msgTypeArr=msgType();foreach ($msgTypeArr as $k => $v):?>
                    <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

        <div class="layui-inline">
            <label class="layui-form-label" style="width: 60px;">是否已读</label>
            <div class="layui-input-inline" style="width: 100px;">
                <select id="is_read" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <?php $isReadArr=isRead();if(is_array($isReadArr) || $isReadArr instanceof \think\Collection || $isReadArr instanceof \think\Paginator): $n = 0; $__LIST__ = $isReadArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>"><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-inline" style="width:11%;">
            <input type="text" class="layui-input" id="addtime" placeholder="请选择生日时间范围">
        </div>
    </div>
    <div class="demoTable layui-form" style="margin-top: 10px;">
        <div class="layui-inline" style="width: 10%;">
            <input class="layui-input" name="key" id="key" placeholder="标题/内容/用户">
        </div>
        
        <button class="layui-btn" id="search" data-type="reload"><?php echo lang('search'); ?></button>
        <a href="<?php echo url('index'); ?>" class="layui-btn">显示全部</a>
        <button type="button" class="layui-btn layui-btn-danger" id="delAll">批量删除</button>
    </div>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/html" id="action">
    <a href="<?php echo url('edit'); ?>?id={{d.id}}" class="layui-btn layui-btn-xs">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script type="text/html" id="money">
    {{d.money}}
</script>
<script>
    layui.use(['table','form','laydate'], function() {
        var table = layui.table, $ = layui.jquery,laydate = layui.laydate;

        laydate.render({
            elem: '#addtime',
            range: true
        });

        var tableIn = table.render({
            id: 'send_msg',
            elem: '#list',
            url: '<?php echo url("index"); ?>',
            method: 'post',
            page: true,
            cols: [[
                {checkbox: true, fixed: true},
                {field: 'title', title: '标题', width: 300, fixed: true},
                {field: 'addtime', title: '<?php echo lang("time"); ?>', width: 150},
                {field: 'username', title: '用户', width: 120},
                {field: 'type', title: '消息/短信', width: 100},
                {field: 'is_read', title: '用户是否已读', width: 120},
                {width: 160, align: 'center', toolbar: '#action'}
            ]],
            limit: 10
        });
        //搜索
        $('#search').on('click', function () {
            var key = $('#key').val();
            var type = $('#type').val();
            var is_read = $('#is_read').val();
            var addtime = $.trim($('#addtime').val());

            tableIn.reload({
                where: {key:key,is_read:is_read,type:type,addtime:addtime}
            });
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if(obj.event === 'del'){
                layer.confirm('您确定要删除该信息吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('del'); ?>",{id:data.id},function(res){
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
            layer.confirm('确认要删除选中信息/短信吗？', {icon: 3}, function(index) {
                layer.close(index);
                var checkStatus = table.checkStatus('send_msg'); //test即为参数id设定的值
                var ids = [];
                $(checkStatus.data).each(function (i, o) {
                    ids.push(o.id);
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
</script>