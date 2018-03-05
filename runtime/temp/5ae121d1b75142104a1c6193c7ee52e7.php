<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"E:\www\hiv/app/admin\view\question\tongji.html";i:1520259565;s:42:"E:\www\hiv/app/admin\view\common\head.html";i:1515977464;s:42:"E:\www\hiv/app/admin\view\common\foot.html";i:1514860702;}*/ ?>
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
	.layui-table td, .layui-table th{
    	font-size: 12px;
    	padding:3px;
    }
    .layui-field-title{
    	margin: 10px 0 5px;
    }
</style>
<fieldset class="layui-elem-field layui-field-title">
	<legend><?php echo $info['title']; ?>的数据统计</legend>
</fieldset>
<div class="layui-form" style="width: 750px;">
  <table class="layui-table">
    <thead>
      <tr>
        <th width="30">编号</th>
        <th width="500">问题</th>
        <th width="150">选项</th>
        <th width="30">人数</th>
        <th width="40">百分比</th>
      </tr> 
    </thead>
    <tbody>
    	<?php if(is_array($questions) || $questions instanceof \think\Collection || $questions instanceof \think\Paginator): $i = 0; $__LIST__ = $questions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
		<tr>
			<td rowspan="<?php echo count($m['optionsList']); ?>"><?php echo $m['indexs']; ?></td>
			<td rowspan="<?php echo count($m['optionsList']); ?>"><?php echo $m['question']; if($m['optionsList'][0]['type'] == 'checkbox'): ?>(多选)<?php endif; ?></td>
			<td><?php echo $m['optionsList'][0]['text']; ?></td>
			<td><?php echo $m['optionsList'][0]['nums']; ?></td>
			<td><?php echo $m['optionsList'][0]['per']; ?>%</td>
		</tr>
		<?php if(is_array($m['optionsList']) || $m['optionsList'] instanceof \think\Collection || $m['optionsList'] instanceof \think\Paginator): $nn = 0; $__LIST__ = $m['optionsList'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mm): $mod = ($nn % 2 );++$nn;if($nn > 1): ?>
		<tr>
			<td><?php echo $mm['text']; ?></td>
			<td><?php echo $mm['nums']; ?></td>
			<td><?php echo $mm['per']; ?>%</td>
		</tr>
		<?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
  <button class="layui-btn layui-btn-primary" style="margin:10px 0 0 10px;" onclick="history.back();">返回问卷列表</button>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>

