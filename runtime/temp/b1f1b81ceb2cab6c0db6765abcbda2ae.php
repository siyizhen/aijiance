<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"F:\www\hiv/app/admin\view\users\edit.html";i:1519970536;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
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
<div class="admin-main layui-anim layui-anim-upbit" ng-app="hd" ng-controller="ctrl">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form layui-form-pane">
        <div class="layui-form-item">
            <label class="layui-form-label">所属用户组</label>
            <div class="layui-input-4">
                <select name="level" lay-verify="required" ng-model="field.level" ng-options="v.level_id as v.level_name for v in group" ng-selected="v.level_id==field.level">
                    <option value="">请选择会员组</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('nickname'); ?></label>
            <div class="layui-input-4">
                <input type="text" name="username" ng-model="field.username" lay-verify="required" placeholder="<?php echo lang('pleaseEnter'); ?><?php echo lang('nickname'); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">生日</label>
            <div class="layui-input-1">
                <input type="text" name="birthday" id="birthday" ng-model="field.birthday" lay-verify="date" placeholder="选择出生日期" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">性取向</label>
            <div class="layui-input-1">
                <select name="quxiang" lay-verify="required">
                    <option value="">请选择</option>
                    <?php $quXiangArr=quXiang();if(is_array($quXiangArr) || $quXiangArr instanceof \think\Collection || $quXiangArr instanceof \think\Paginator): $n = 0; $__LIST__ = $quXiangArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>" <?php if($userInfo['quxiang'] == $n): ?>selected=""<?php endif; ?>><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">学历</label>
            <div class="layui-input-1">
                <select name="xueli" lay-verify="required">
                    <option value="">请选择</option>
                    <?php $xueLiArr=xueLi();if(is_array($xueLiArr) || $xueLiArr instanceof \think\Collection || $xueLiArr instanceof \think\Paginator): $n = 0; $__LIST__ = $xueLiArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>" <?php if($userInfo['xueli'] == $n): ?>selected=""<?php endif; ?>><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">职业</label>
            <div class="layui-input-1">
                <select name="zhiye" lay-verify="required">
                    <option value="">请选择</option>
                    <?php $zhiYeArr=zhiYe();if(is_array($zhiYeArr) || $zhiYeArr instanceof \think\Collection || $zhiYeArr instanceof \think\Paginator): $n = 0; $__LIST__ = $zhiYeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
                    <option value="<?php echo $n; ?>" <?php if($userInfo['zhiye'] == $n): ?>selected=""<?php endif; ?>><?php echo $m; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label"><?php echo lang('sex'); ?></label>
                <div class="layui-input-block">
                    <input type="radio" name="sex" ng-model="field.sex" ng-checked="field.sex==1" ng-value="1" title="<?php echo lang('man'); ?>">
                    <input type="radio" name="sex" ng-model="field.sex" ng-checked="field.sex==0" ng-value="0" title="<?php echo lang('woman'); ?>">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script src="__STATIC__/common/js/angular.min.js"></script>
<script>
    var m = angular.module('hd',[]);
    m.controller('ctrl',function($scope) {
        $scope.field = <?php echo $info; ?>;
        $scope.group = <?php echo $user_level; ?>;
        layui.use(['form', 'layer','laydate'], function () {
            var form = layui.form, layer = layui.layer,$= layui.jquery;
            var laydate = layui.laydate;
  
            //常规用法
            laydate.render({
                elem: '#birthday'
            });
            form.on('submit(submit)', function (data) {
                // 提交到方法 默认为本身
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                data.field.id = $scope.field.id;
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
            });
        });
    })
</script>
</body>
</html>