<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"E:\www\hiv/app/home\view\pc\index.html";i:1520516936;s:46:"E:\www\hiv/app/home\view\pc\common_header.html";i:1520598967;s:46:"E:\www\hiv/app/home\view\pc\common_footer.html";i:1520516936;s:39:"E:\www\hiv/app/home\view\pc\bottom.html";i:1520598967;s:39:"E:\www\hiv/app/home\view\pc\leftkf.html";i:1520516936;s:46:"E:\www\hiv/app/home\view\pc\footer_source.html";i:1520516936;}*/ ?>
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

    <!--banner图-->
	<div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php if(is_array($adList) || $adList instanceof \think\Collection || $adList instanceof \think\Paginator): $i = 0; $__LIST__ = $adList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li data-slide-to="<?php echo $i-1; ?>" <?php if($i == 1): ?>class="active"<?php endif; ?>></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php if(is_array($adList) || $adList instanceof \think\Collection || $adList instanceof \think\Paginator): $i = 0; $__LIST__ = $adList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="item <?php if($i == 1): ?>active<?php endif; ?>">
				<img  src="__PUBLIC__<?php echo $vo['pic']; ?>" alt="<?php echo $vo['name']; ?>" class="slide-image">
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_center">
					<h1 data-animation="animated flipInX"><?php echo $vo['name']; ?></h1>
					<p data-animation="animated lightSpeedIn"><?php echo $vo['content']; ?></p> 
					<a href="<?php echo $vo['url']; ?>" target="_blank" class="btn btn-primary">了解更多</a>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

		<!-- Left Control -->
		<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<!-- Right Control -->
		<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="index">
		<!--中部碎片-->
		<div class="section1">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="s1-item wow fadeInUp" data-wow-delay="300ms">
							<a  href="home/reagent/index/catId/15.html" title="" target="_blank" >
								<div class="s1-img">
									<img src="__HOME__/pc/demo/business-template/v398/upload/images/201706/14987232797628.jpg" />
								</div>
								<div class="s1-text">
									<h4><font>艾检测小黄盒</font></h4>
									<p>申请流程简单，信息全程保密</p>
									<p>5分钟内知晓结果，平台就近推荐专业检测机构为您答疑解惑</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="s1-item wow fadeInUp" data-wow-delay="300ms">
							<a href="demo/business-template/V398/fu-wu/show_171.html" title="" target="_blank" >
								<div class="s1-img">
									<img src="__HOME__/pc/demo/business-template/v398/upload/images/201706/14987284560146.jpg" />
								</div>
								<div class="s1-text">
									<h4><font>艾滋病病毒感染保险金</font></h4>
									<p>等待期90天后，于30日内通过HIV阴性监测的健康被保人</p>
									<p>保障期间内感染HIV即可获得保险金10万被保人卖淫、</p>
									<p style="margin-left:160px !important;">嫖娼、使用毒品、管制药物期间患病的除外</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section3" data-stellar-background-ratio="0.1">
			<div class="container">
				<div class="s3-ico"></div>
				<div class="s3-content wow fadeInUp">
					<h4>关于我们</h4>
					<p>about us<p>
					<div class="s3-text">艾检测是由湖南户晓科技发展有限公司联合众多国内防艾公益组织、政府机构、社区人群共同开发的一款艾滋病综合服务平台。您可通过本平台查询合作医疗机构的HIV初筛检测结果、申请免费的HIV检测试剂……</div>
					<a class="s3-more" href="about/14.html" target="_blank">more<span class="fa fa-angle-right"></a>
				</div>
			</div>
		</div>
		<div class="section4" style="padding-bottom: 0;">
			<div class="title10 wow fadeInUp">
				<h4><a href="<?php echo url('home/article/index',['catId'=>16]); ?>" title="" target="_blank">新闻资讯</a></h4>
				<p>news</p>
			</div>
			<div class="blank20"></div>
			<div class="blank20"></div>
			<div class="container">
				<div class="row">
					<?php $result = db("article")->alias("a")->join("ajc_category c","a.catid = c.id","left")
            ->where("posid = 1")
            ->field("a.*,c.catdir")
            ->limit(3)
            ->order("listorder asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>	
					<div class="col-md-4">
						<div class="s4-item wow fadeInUp">
							<a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>" target="_blank" >
							<div class="s4-date">
								<div class="s4-date-ico"><span class="fa fa-angle-right"></span></div>
								<div class="s4-date-md"><?php echo toDate($vo['createtime'],'m-d'); ?></div>
								<div class="s4-date-y"><?php echo toDate($vo['createtime'],'Y'); ?></div>
							</div>
							<div class="s4-text">
								<h4><font style="color:;"><?php echo str_cut($vo['title'],30,'...'); ?></font></h4>
								<p><?php echo str_cut(strip_tags($vo['content']),120); ?></p>
							</div>
							</a>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>

		<div class="section2" style="padding: 0;">
			<div class="title10 wow fadeInUp" data-wow-delay="300ms"> 
				<h4><a href="home/article/index/catId/17.html" title="" target="_blank">媒体报道</a></h4>
				<p>Media reports</p>
			</div>
			<div class="container">
				<div class="row">
					<?php $result = db("article")->alias("a")->join("ajc_category c","a.catid = c.id","left")
            ->where("catid=17")
            ->field("a.*,c.catdir")
            ->limit(8)
            ->order("listorder asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>	
					<div class="col-sm-3 col-xs-6">
						<div class="s2-item wow fadeInUp" data-wow-delay="300ms">
							<a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>" target="_blank" >
								<div class="s2-img">
									<img src="__PUBLIC__<?php echo $vo['thumb']; ?>" />
									<div class="s2-ico"></div>
								</div>
								<div class="s2-text">
									<h4><font><?php echo str_cut($vo['title'],30,'...'); ?></font></h4>
								</div>
							</a>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="index-more wow fadeInUp">
					<a href="home/article/index/catId/17.html" target="_blank">more<span class="fa fa-angle-right"></span>
					</a>
				</div>
			</div>
		</div>
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
</body>
</html>
