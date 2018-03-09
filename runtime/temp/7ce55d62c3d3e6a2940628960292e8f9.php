<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"E:\www\hiv/app/home\view\pc\baoxian.html";i:1520516936;s:46:"E:\www\hiv/app/home\view\pc\common_header.html";i:1520598967;s:39:"E:\www\hiv/app/home\view\pc\leftkf.html";i:1520516936;s:46:"E:\www\hiv/app/home\view\pc\footer_source.html";i:1520516936;}*/ ?>
﻿<!DOCTYPE html>
<head>
	<meta name="Generator" content="CmsEasy 5_6_0_20170105_UTF8" />
	<title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info['description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/bootstrap.min.css" rel="stylesheet">
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/style.css" rel="stylesheet">
	<link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/font-awesome.css" rel="stylesheet">
	<link href="__HOME__/pc/template/default_bootstrap/skin/js/slide/bootstrap-touch-slider.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="__HOME__/pc/css/index.css">
	<style>
		.box2{pading:0 !important;}
		.breadcrumb{margin-bottom: 0 !important}
		.container_one{margin-top: 70px;}
	</style>
</head>
<body>
	<div class="hidden-xs">
		<div id="header" class="clearfix">
			<div class="">
				<div class="logo-box">
					<a href="<?php echo url('home/index/index'); ?>"><img src="__PUBLIC__<?php echo $sys['logo']; ?>" alt="<?php echo $sys['name']; ?>" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li <?php if($controller == index): ?>class="on"<?php endif; ?>><a href="<?php echo url('home/index/index'); ?>">网站首页</a></li>
						<li <?php if($controller == baoxian): ?>class="on"<?php endif; ?>><a href="<?php echo url('home/baoxian/index'); ?>">防艾险</a></li>
						<li <?php if($controller == question): ?>class="on"<?php endif; ?>><a href="<?php echo url('home/question/question'); ?>">问卷中心</a></li>
						<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		                <li <?php if($controller == $vo['catdir']): ?>class="on"<?php endif; ?>>
		                    <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']]); ?>" title="<?php echo $vo['catname']; ?>-<?php echo $sys['name']; ?>"><?php echo $vo['catname']; ?></a>
		                </li>
		                <?php endforeach; endif; else: echo "" ;endif; ?>
						<li>
							<a href="<?php echo url('user/index/myInfo'); ?>">
								<?php if(empty(session('user'))): ?>
								个人中心
								<?php else: ?>
								<?php echo substr_replace(session('user.username'),'****',3,4); endif; ?>
								<span class="fa fa-angle-down"></span>
							</a>
							<div class="menu2" style="left:0;width: 100px;">
								<ul>
									<?php if(empty(session('user'))): ?>
									<li><a href="<?php echo url('user/login/index'); ?>">登录</a></li>
									<?php else: ?>
									<li><a href="<?php echo url('user/common/logout'); ?>">退出</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<link rel="stylesheet" type="text/css" href="__HOME__/pc/cshi-internet/anticancer/css/common.css">
<link rel="stylesheet" type="text/css" href="__HOME__/pc/cshi-internet/mbodyguard/css/newcss/index.css">
<link rel="stylesheet" type="text/css" href="__HOME__/pc/cshi-internet/olinsurance/css/public.css">

    <div class="main-container">
    <!--主内容-->
    <div class="main-banner" style="background: url(__HOME__/pc/images/baoxian_banner.jpg)"></div>
    <div class="main-row clearfix">
        <div class="insurance-wrapper clearfix">
            <ul class="insurance-inWrapper clearfix">
                <li class="insuranceAge insuranceSelect inAge" style="height: 40px;text-align: center;">
                    保障年龄：16-64周岁
                </li>
                <li class="insuranceMoney insuranceSelect" style="height: 40px;text-align: center;">
                    艾滋病病毒感染保险金：10万
                </li>
                <li class="insuranceBtn">
                    <a style="text-decoration: none;color:#fff;" href="javascript:toubao();" otitle="立即投保" title="立即投保">立即投保</a>
                </li>
                <li class="insuranceCost" style="width: 200px;font-size: 16px;">
                    ￥<?php echo config('baoxian_money'); ?>(保费+附加服务费)
                </li>
                <li class="insuranceTitle">
                    需缴纳的费用
                </li>
            </ul>
        </div>
    </div>
    <!-- 产品详情 -->
    <div class="productTab">
        <ul class="productInTab clearfix">
            <li class="current tabFirst">产品优势</li>
            <li>常见问题</li>
            <?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
            <li><?php echo $m['title']; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="main-row m-wrapper wrapper-product">
        <div class="p-main">
			<img src="__HOME__/pc/images/1.png" alt="" style="float: left;">
			<img src="__HOME__/pc/images/2.png" alt="" style="float: left;">
			<div class="clearfix"></div>
			<img src="__HOME__/pc/images/3.png" alt="" style="float: left;">
			<img src="__HOME__/pc/images/4.png" alt="" style="float: left;">
		</div>
    </div>
    <div class="main-row m-wrapper wrapper-question">
        <ul class="inWrapper-question clearfix">
            <li class="questionIcon"></li>
            <li class="questions">这款产品有等待期吗？</li>
        </ul>
        <div class="answer">
        	<span>A:</span>您好，此款产品的等待期为90天。
        </div>
        <ul class="inWrapper-question clearfix">
            <li class="questionIcon"></li>
            <li class="questions">这款产品可以投保多份么？</li>
        </ul>
        <div class="answer">
        	<span>A:</span>您好，本产品每人限投保1份。
        </div>
        <ul class="inWrapper-question clearfix">
            <li class="questionIcon"></li>
            <li class="questions">此款产品可以续保吗？</li>
        </ul>
        <div class="answer">
            <span>A:</span>您好，本产品支持自动续保，如险种到期提供短信提醒续保缴费，连续续保客户，无需等待期及再次提供检验报告。一旦检查发现艾滋病抗体为阳性或提出理赔，即不可续保。
        </div>
        <ul class="inWrapper-question clearfix">
            <li class="questionIcon"></li>
            <li class="questions">本产品还需要体检吗？</li>
        </ul>
        <div class="answer">
            <span>A:</span>您好，本产品需要体检。本保险自投保之日起90日内（含90日）均为等待期，被保险人需在等待期结束后30日内，在符合本保险合同第十六条释义的医院，完成艾滋病抗体检测且为阴性的，保险责任方可生效。
        </div>
    </div>


    <?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): $n = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
    <div class="main-row m-wrapper <?php if($n == 1): ?>wrapper-declaration<?php elseif($n == 2): ?>wrapper-xuzhi<?php elseif($n == 3): ?>wrapper-tiaokuan<?php endif; ?>">
        <div class="inWrapper-declaration">
            <?php echo $m['content']; ?>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<div style="width: 1223px;margin:0 auto;">
    <div class="insurance-condition">
        <div class="conditionTitle">相关说明</div>
        <ul class="conditionInfo">
            <li class="clearfix">
                保障年龄：16-64<br />
                周岁保障期限：1年(一般没有公司敢对HIV承保。平安首创防艾险，无论好gay友、血友病患者或HIV传染源接触的高危行业，感染即赔付！防艾，不只是说说而已！)<br />
                保障范围:<br />
                艾滋病病毒感染保险金(10万)<br />
                等待期90天后，于30日内通过HIV阴性监测的健康被保人，保障期间内感染HIV即可获得保险金10万（被保人卖淫、嫖娼、使用毒品、管制药物期间患病的除外）<br />
            </li>
        </ul>
    </div>
</div>
    
<!-- 底部 Start -->
<div class="footerWrap">
	<div class="copyRightArea">

		<p>Copyright © <?php echo $sys['copyright']; ?> <a href="<?php echo url('home/index/index'); ?>" target="_blank"><?php echo $sys['name']; ?></a> All rights reserved.&nbsp;&nbsp;艾检测工作室提供技术支持</p>
		<p class="icp">
			<a rel="nofollow" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><?php echo $sys['bah']; ?></a>&nbsp;&nbsp;
		</p>
	</div>
</div>
<!-- 底部 End -->

<div class="servers">
	<div id="top">
		<div id="izl_rmenu" class="izl-rmenu">
			<div class="sbtn btn-qq">
				<div class="qq">
					<?php if(is_array($qqArr) || $qqArr instanceof \think\Collection || $qqArr instanceof \think\Paginator): $n = 0; $__LIST__ = $qqArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($n % 2 );++$n;?>
					<a rel="nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $m; ?>&site=qq&menu=yes">客服<?php echo $n; ?></a>
					<?php if(count($qqArr) != $n): ?>
					<br />
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="sbtn btn-wx"><img class="pic" src="__PUBLIC__/<?php echo $sys['wechat_logo']; ?>"></div>
			<div class="sbtn btn-phone">
				<div class="phone"><?php echo $sys['tel']; ?></div>
			</div>
			<div class="sbtn btn-top"></div>
		</div>
	</div>
</div>
<script src="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/js/jquery.min.js"></script>
<script src="__HOME__/pc/template/default_bootstrap/skin/js/bootstrap.min.js"></script>
<script src="__HOME__/pc/template/default_bootstrap/skin/js/slide/jquery.touchSwipe.min.js"></script>
<script src="__HOME__/pc/template/default_bootstrap/skin/js/slide/bootstrap-touch-slider.js"></script>
<script src="__HOME__/pc/js/layer/layer.js"></script>
<script src="__STATIC__/plugins/jquery_cookie/jquery.cookie.js"></script>

<script type="text/javascript">
	//微信公众号的显示与隐藏
	$("#weixin").click(function() {
		$("#outer-w").show();
	});
	$("#close").click(function() {
		$("#outer-w").hide();
	});

	$(function(){
		$("#izl_rmenu").each(function(){
			$(this).find(".btn-qq").mouseenter(function(){
				$(this).find(".qq").fadeIn("fast");
			});
			$(this).find(".btn-qq").mouseleave(function(){
				$(this).find(".qq").fadeOut("fast");
			});
			$(this).find(".btn-wx").mouseenter(function(){
				$(this).find(".pic").fadeIn("fast");
			});
			$(this).find(".btn-wx").mouseleave(function(){
				$(this).find(".pic").fadeOut("fast");
			});
			$(this).find(".btn-phone").mouseenter(function(){
				$(this).find(".phone").fadeIn("fast");
			});
			$(this).find(".btn-phone").mouseleave(function(){
				$(this).find(".phone").fadeOut("fast");
			});
			$(this).find(".btn-top").click(function(){
				$("html, body").animate({
					"scroll-top":0
				},"fast");
			});
		});

		var lastRmenuStatus=false;
		$(window).scroll(function(){
			var _top=$(window).scrollTop();
			if(_top>200){
				$("#izl_rmenu").data("expanded",true);
			}else{
				$("#izl_rmenu").data("expanded",false);
			}
			if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
				lastRmenuStatus=$("#izl_rmenu").data("expanded");
				if(lastRmenuStatus){
					$("#izl_rmenu .btn-top").slideDown();
				}else{
					$("#izl_rmenu .btn-top").slideUp();
				}
			}
		});
	});
</script>
<script type="text/javascript" src="__HOME__/pc/cshi-internet/mbodyguard/js/homePage.js"></script>
<script type="text/javascript" src="__HOME__/pc/js/layer/layer.js"></script>
<script type="text/javascript">
    function toubao(){
        layer.open({
            type: 2,
            title: '录入投保信息',
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['1100px', '80%'],
            content: "<?php echo url('home/baoxian/toubao'); ?>"
        });
    }
</script>
</body>
</html>


