<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:48:"E:\www\hiv/app/home\view\pc\jiancedian_show.html";i:1520598967;s:46:"E:\www\hiv/app/home\view\pc\common_header.html";i:1520598967;s:49:"E:\www\hiv/app/home\view\pc\show_short_title.html";i:1520598967;s:46:"E:\www\hiv/app/home\view\pc\common_footer.html";i:1520516936;s:39:"E:\www\hiv/app/home\view\pc\bottom.html";i:1520598967;s:39:"E:\www\hiv/app/home\view\pc\leftkf.html";i:1520516936;s:46:"E:\www\hiv/app/home\view\pc\footer_source.html";i:1520516936;}*/ ?>
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
<link rel="stylesheet" href="__HOME__/pc/public/index/layui/css/layui.css">
<link rel="stylesheet" href="__HOME__/pc/css/jiancedian.css">
<style>
    .fuzhu_title{height: 40px;line-height: 40px;}
    .breadcrumb{background: #FFF;margin-bottom: 0;margin-top: 15px;}
    .main{float: none !important;margin:0 auto !important;}
    #BRS{min-height: 790px;}
</style>
    <div id="BRS">
        <section class="content">  
            <nav style="max-width: 1000px;margin:0 auto;margin-bottom: 10px;">
                <ol class="breadcrumb"><span class="glyphicon glyphicon-list"></span>
                    <li><a href="<?php echo url('home/index/index'); ?>">首页</a></li>
<li><a href="<?php echo url('home/'.MODULE_NAME.'/index',array('catId'=>input('catId'))); ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></li>
<li><?php if(!empty($info['title'])): ?><?php echo $info['title']; else: ?><?php echo $info['name']; endif; ?></li>
                </ol>
            </nav>

            <div class="article-detail">
                <div class="article-detail-body">
                    <p class="fuzhu_title" style="font-size: 18px;font-weight:400;"><?php echo $info['name']; ?></p>
                    <a href="<?php echo $info['map_url']; ?>" target="_blank">
                        <p class="fuzhu_title" style="color:red;"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $info['address']; ?></p>
                    </a>
                    <p class="fuzhu_title"><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $info['phone']; ?></p>
                    <p class="fuzhu_title"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $info['service_time']; ?></p>
                    <div class="caption" style="margin-top: 20px;">                 
                        <h3>检测方式</h3>                 
                        <p style="padding:10px;"><?php echo $info['jiance_way']; ?></p>             
                    </div>
                    <div class="caption" style="margin-top: 20px;">                 
                        <h3>检测说明</h3>                 
                        <p style="padding:10px;"><?php echo $info['jiance_explation']; ?></p>             
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $qqArr=explode('|',$sys['qq']);?>
<div class="foot">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-sm-4 foot1">
				<ul>
					<li>电 话：<?php echo $sys['tel']; ?></li>
					<li>邮 箱：<?php echo $sys['email']; ?></li>
					<li>客 服：&nbsp;&nbsp;<a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qqArr[0]; ?>&site=qq&menu=yes" target="_blank"><span class="fa fa-qq"></span></a></li>
				</ul>
			</div>
			<div class="col-sm-4 foot2">
				<ul>
					<li>公众平台：&nbsp;&nbsp;<a id="weixin" href="javascript:;"><span class="fa fa-weixin"></span></a></li>
					<li>地 址：<?php echo $sys['ads']; ?></li>
					<li>邮政编码：410000</li>
				</ul>
			</div>
			<div class="col-sm-4 foot3">
				<ul>
					<li><a href="/about/19.html">保密协议</a></li>
					<li><a href="/about/20.html">联系我们</a></li>
					<li><a href="/about/21.html">常见问题</a></li>
				</ul>
			</div>				
		</div>
	</div>
</div>

<div class="foot-b">
	<div class="container">
	Copyright © <?php echo $sys['copyright']; ?> <a href="<?php echo url('home/index/index'); ?>" target="_blank"><?php echo $sys['name']; ?></a> All rights reserved.&nbsp;&nbsp;<a rel="nofollow" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><?php echo $sys['bah']; ?></a>&nbsp;&nbsp;艾检测工作室提供技术支持
	</div>
</div>

<div id="outer-w">
	<div id="outer" >
		<div id="middle">
			<div id="inner" class="inner">
				<div class="inner1">
					<img src="__PUBLIC__/<?php echo $sys['wechat_logo']; ?>" width="200" height="200" alt="" />
				<div id="close"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="bg-black"></div>	
</div>
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
</html>
