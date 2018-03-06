<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"F:\www\hiv/app/admin\view\users\index.html";i:1520210002;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
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
        <legend><?php echo lang('user'); ?><?php echo lang('list'); ?></legend>
    </fieldset>
    <div class="demoTable layui-form" style="margin-top: 10px;">
        <div class="layui-inline">
            <label class="layui-form-label" style="width: 45px;">性取向</label>
            <div class="layui-input-inline" style="width: 100px;">
                <select id="quxiang" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <?php $quXiangArr=quXiang();if(is_array($quXiangArr) || $quXiangArr instanceof \think\Collection || $quXiangArr instanceof \think\Paginator): $n = 0; $__LIST__ = $quXiangArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>"><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-inline">
            <label class="layui-form-label" style="width: 45px;">职业</label>
            <div class="layui-input-inline" style="width: 100px;">
                <select id="zhiye" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <?php $zhiYeArr=zhiYe();if(is_array($zhiYeArr) || $zhiYeArr instanceof \think\Collection || $zhiYeArr instanceof \think\Paginator): $n = 0; $__LIST__ = $zhiYeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>"><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-inline">
            <label class="layui-form-label" style="width: 45px;">学历</label>
            <div class="layui-input-inline" style="width: 100px;">
                <select id="xueli" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <?php $xueLiArr=xueLi();if(is_array($xueLiArr) || $xueLiArr instanceof \think\Collection || $xueLiArr instanceof \think\Paginator): $n = 0; $__LIST__ = $xueLiArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>"><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-inline" style="width:11%;">
            <input type="text" class="layui-input" id="birthday" placeholder="请选择生日时间范围">
        </div>
    </div>
    <div class="demoTable layui-form" style="margin-top: 10px;">
        <div class="layui-inline" style="width: 10%;">
            <input class="layui-input" name="key" id="key" placeholder="请输入帐号">
        </div>

        <div class="layui-inline" style="width:11%;">
            <input type="text" class="layui-input" id="reg_time" placeholder="请选择注册时间范围">
        </div>
        
        <button class="layui-btn" id="search" data-type="reload">搜索</button>
        <a href="javascript:sendMsg('sms');" class="layui-btn layui-btn-normal">发短信</a>
        <a href="javascript:sendMsg('msg');" class="layui-btn layui-btn-warm">发消息</a>
        <!-- <a href="javascript:downloadList();" class="layui-btn layui-btn-warm">导出数据</a> -->
        <!-- <button type="button" class="layui-btn layui-btn-danger" id="delAll">批量删除</button> -->
        <div style="clear: both;"></div>
    </div>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/html" id="action">
    <a href="<?php echo url('edit'); ?>?id={{d.id}}" class="layui-btn layui-btn-xs">编辑</a>
    <!-- <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a> -->
</script>

<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script>
    var form,layer,table,$;
    layui.use(['table','form','laydate'], function() {
        var laydate = layui.laydate;
        layer=layui.layer;
        form = layui.form;
        table = layui.table;
        $ = layui.jquery;

        laydate.render({
            elem: '#birthday',
            range: true
        });
        laydate.render({
            elem: '#reg_time',
            range: true
        });

        var tableIn = table.render({
            id: 'user',
            elem: '#list',
            url: '<?php echo url("index"); ?>',
            method: 'post',
            page: true,
            cols: [[
                {checkbox:true,fixed: true},
                {field: 'indexs', title: '<?php echo lang("id"); ?>', width: 80, fixed: true},
                {field: 'username', title: '帐号', width: 120},
                {field: 'sex', title: '性别', width: 60},
                {field: 'birthday', title: '生日', width: 110},
                {field: 'quxiang', title: '性取向', width: 80},
                {field: 'xueli', title: '学历', width: 100},
                {field: 'zhiye', title: '职业', width: 120},
                {field: 'reg_time', title: '注册日期', width: 150},
                {field: 'last_login', title: '登录时间', width: 150},
                {field: 'last_ip', title: '登录IP', width: 140},
                {width: 80, align: 'center', toolbar: '#action'}
            ]],
            limit: 10 //每页默认显示的数量
        });
        form.on('switch(is_lock)', function(obj){
            loading =layer.load(1, {shade: [0.1,'#fff']});
            var id = this.value;
            var is_lock = obj.elem.checked===true?0:1;
            $.post('<?php echo url("usersState"); ?>',{'id':id,'is_lock':is_lock},function (res) {
                layer.close(loading);
                if (res.status==1) {
                    tableIn.reload();
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                    return false;
                }
            })
        });
        //搜索
        $('#search').on('click', function() {
            var key = $('#key').val();
            var quxiang = $('#quxiang').val();
            var zhiye = $('#zhiye').val();
            var xueli = $('#xueli').val();
            var birthday = $.trim($('#birthday').val());
            var reg_time = $.trim($('#reg_time').val());

            tableIn.reload({
                where: {key:key,zhiye:zhiye,xueli:xueli,quxiang:quxiang,birthday:birthday,reg_time:reg_time}
            });
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'del') {
                layer.confirm('您确定要删除该会员吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('usersDel'); ?>",{id:data.id},function(res){
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
            layer.confirm('确认要删除选中信息吗？', {icon: 3}, function(index) {
                layer.close(index);
                var checkStatus = table.checkStatus('user'); //test即为参数id设定的值
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

    function sendMsg(act){
        if(act=='msg'){
            var word='消息';
        }else if(act=='sms'){
            var word='短信';
        }
        layer.confirm(word+'服务—发送全部用户？还是部分用户发送？', {
            title:word,
            btn: ['全发','部分'] 
        }, function(){
            layer.open({
                type: 2,
                title: '向所有用户发送'+word,
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['1000px', '90%'],
                content: "<?php echo url('sendMsg'); ?>?act="+act
            });
        }, function(){
            var checkStatus = table.checkStatus('user'); //test即为参数id设定的值
            var ids = [];
            $(checkStatus.data).each(function (i, o) {
                ids.push(o.id);
            });
            if(ids.length<=0){
                layer.msg('请选择要发送'+word+'的用户！',{icon:2});
                return;
            }
            var idStr=ids.join(',');
            layer.open({
                type: 2,
                title: '向选中用户发送'+word,
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['1000px', '90%'],
                content: "<?php echo url('sendMsg'); ?>?act="+act+'&idStr='+idStr
            });
        });
    }
</script>
</body>
</html>