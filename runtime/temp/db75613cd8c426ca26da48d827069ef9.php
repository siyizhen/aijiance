<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"F:\www\hiv/app/home\view\pc\page_apply_reagent.html";i:1519638218;s:46:"F:\www\hiv/app/home\view\pc\common_header.html";i:1519629344;s:46:"F:\www\hiv/app/home\view\pc\common_footer.html";i:1519635994;}*/ ?>
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
						<li><a href="">防艾险</a></li>
						<li><a href="">问卷中心</a></li>
						<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		                <li <?php if($controller == $vo['catdir']): ?>class="on"<?php endif; ?>>
		                    <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>-<?php echo $sys['name']; ?>"><?php echo $vo['catname']; ?></a>
		                </li>
		                <?php endforeach; endif; else: echo "" ;endif; ?>
						<li>
							<a href="demo/business-template/V398/Product">
								个人中心<span class="fa fa-angle-down"></span>
							</a>
							<div class="menu2" style="left:0;width: 100px;">
								<ul>
									<li><a href="">登录</a></li>
									<li><a href="">注册</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="index">
		<div class="container ">
			<div class="row">
				<nav>
				<ol class="breadcrumb"><span class="glyphicon glyphicon-list"></span>
					<li><a href="demo/business-template/V398/">网站首页</a></li>
					<li><a title="关于" href="demo/business-template/V398/guan-yu">关于</a></li>
				</ol>
				</nav>
			</div>
		</div>

		<div class="title">
			<h3 class="wow bounceInDown">
				<a href="javascript:;"><?php echo $info['title']; ?></a>
			</h3>
			<p class="wow bounceIn"></p>
		</div>

		<div class="container">
			<div>
				<?php echo $info['content']; ?>
				<br />
				<p style="text-align: center;">以下是小黄盒试剂图片样例</p>
				<img src="__HOME__/pc/images/example.jpg" alt="" width="614" class="detail_img_css">
				<br />
				<p style="text-align: center;">以下是小黄盒试剂操作视频</p>
				<embed src="https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=h0511bs0mcy&auto=0" allowFullScreen="true" quality="high" width="614" height="450" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" class="detail_img_css"></embed>
			</div>

			<div class="foot4" style="padding-top: 40px;">
				<p class="notice_kuaidi">温馨提示:您需要支付邮递费用，在线支付为15元；选择货到付款，我们统一使用顺丰发货，约为22元</p>
		 		<div class="shfw-form">
					<div class="row wow fadeInUp">
						<div class="col-lg-7 col-md-6 col-sm-6 center_class">
							<div>
								<label for="youjidian" class="label_class">邮寄点</label>
								<select id="youjidian" class="form-control select_class">
									<option value="">请选择离您最近的邮寄点</option>
									<?php if(is_array($youjidianArr) || $youjidianArr instanceof \think\Collection || $youjidianArr instanceof \think\Paginator): $i = 0; $__LIST__ = $youjidianArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $m['id']; ?>"><?php echo $m['name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<div class="clearfix"></div>
							</div>

							<div>
								<label for="shoujianren" class="label_class">收件人</label>
								<input type="text" class="form-control input_class" id="shoujianren" placeholder="请输入收件人姓名" >
								<div class="clearfix"></div>
							</div>

							<div>
								<label for="getphone" class="label_class">联系电话</label>
								<input type="text" class="form-control input_class" id="getphone" placeholder="请输入联系电话" >
								<div class="clearfix"></div>
							</div>

							<div>
								<label class="label_class">城市</label>
								<select id="province" class="form-control liandong_select_class">
									<option value="">请选择省份</option>
									<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $m['id']; ?>"><?php echo $m['name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<select id="city" class="form-control liandong_select_class">
									<option value="">请选择城市</option>
								</select>
								<select id="district" class="form-control liandong_select_class">
									<option value="">请选择区县</option>
								</select>
								<div class="clearfix"></div>
							</div>

							<div>
								<label for="address" class="label_class">详细地址</label>
								<input type="text" class="form-control input_class" id="address" placeholder="请输入详细地址" >
								<div class="clearfix"></div>
							</div>

							<div>
								<label  class="label_class">支付方式</label>
								<div style="float: left;margin-left: 10px;">
									<input type="radio" value="1" name="payway" class="radio_class"><font style="font-size: 18px;"> 货到付款</font>&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" value="2" name="payway" class="radio_class" checked=""><font style="font-size: 18px;"> 在线支付</font>
								</div>
								<div class="clearfix"></div>
							</div>
																
							<input class="btn btn-default foot-btn" type="button" id="submit" value="提交订单">
						</div>
					</div>
				</div>
			</div>
			<div class="blank60"></div>
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
					</ul>
				</div>
				<div class="col-sm-4 foot2">
					<ul>
						<li>第三方平台</li>
						<li class="fenxiang clearfix">						
							<!-- <a href="#"><span class="fa fa-weibo"></span></a> -->
							<a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qqArr[0]; ?>&site=qq&menu=yes" target="_blank"><span class="fa fa-qq"></span></a>
							<a id="weixin" href="javascript:;"><span class="fa fa-weixin"></span></a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 foot3">
					<ul>
						<li>地 址：<?php echo $sys['ads']; ?></li>
						<li>邮政编码：410000</li>
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
	
	<script src="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/js/jquery.min.js"></script>
	<script src="__HOME__/pc/template/default_bootstrap/skin/js/bootstrap.min.js"></script>
	<script src="__HOME__/pc/template/default_bootstrap/skin/js/slide/jquery.touchSwipe.min.js"></script>
    <script src="__HOME__/pc/template/default_bootstrap/skin/js/slide/bootstrap-touch-slider.js"></script>
    <script src="__HOME__/pc/js/layer/layer.js"></script>
    
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
	<script type="text/javascript">
		$("#province").change(function() {
			var province=$(this).val();
			$.ajax({
				url: "<?php echo url('base/base/getRegion'); ?>",
				type: 'GET',
				dataType: 'json',
				data: {pid:province,type:2},
				success:function(res){
					var str='<option value="">请选择城市</option>';
					$.each(res, function(index, val) {
						str+='<option value="'+val.id+'">'+val.name+'</option>';
					});
					$("#city").html(str);
					$("#district").html('<option value="">请选择区县</option>');
				}
			})
		});

		$("#city").change(function() {
			var city=$(this).val();
			$.ajax({
				url: "<?php echo url('base/base/getRegion'); ?>",
				type: 'GET',
				dataType: 'json',
				data: {pid:city,type:3},
				success:function(res){
					var str='<option value="">请选择区县</option>';
					$.each(res, function(index, val) {
						str+='<option value="'+val.id+'">'+val.name+'</option>';
					});
					$("#district").html(str);
				}
			})
		});

		$("#submit").click(function() {
			var youjidian=$.trim($("#youjidian").val());
			var shoujianren=$.trim($("#shoujianren").val());
			var getphone=$.trim($("#getphone").val());
			var shoujianren=$.trim($("#shoujianren").val());
			var province=$.trim($("#province").val());
			var city=$.trim($("#city").val());
			var district=$.trim($("#district").val());
			var address=$.trim($("#address").val());
			var payway=$("input[name='payway']:checked").val();

			if(youjidian==''){
				layer.msg('请选择邮寄点！',{icon:2});
				$("#youjidian").focus();
				return;
			}
			if(shoujianren==''){
				layer.msg('请输入收件人！',{icon:2});
				$("#shoujianren").focus();
				return;
			}
			var reg=/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$|17[0-9]{1}[0-9]{8}$/;
			if(!reg.test(getphone)){
				layer.msg('请输入正确的手机号！',{icon:2});
				$("#getphone").focus();
				return;
			}
			if(isNaN(province)||province==''){
				layer.msg('请选择省份！',{icon:2});
				$("#province").focus();
				return;
			}
			if(isNaN(city)||city==''){
				layer.msg('请选择城市！',{icon:2});
				$("#city").focus();
				return;
			}
			if(isNaN(district)||district==''){
				layer.msg('请选择区县！',{icon:2});
				$("#district").focus();
				return;
			}
			if(address==''){
				layer.msg('请输入详细地址！',{icon:2});
				$("#address").focus();
				return;
			}
			if(isNaN(payway)||payway==''){
				layer.msg('请选择支付方式！',{icon:2});
				return;
			}
			var data={youjidian:youjidian,shoujianren:shoujianren,getphone:getphone,province:province,city:city,district:district,address:address,payway:payway};
			var _index=layer.msg('加载中……', {icon: 16,shade: [0.9, '#1A1A1A'],time:10000});
			$.ajax({
				url: '<?php echo url("order/add"); ?>',
				type: 'POST',
				dataType:'json',
				data: data,
				success:function(res){
					if(res.status==0){	
						setTimeout(function(){
							window.location.href=res.url;
						},3000);
						layer.msg(res.msg,{icon:2});
					}else{
						setTimeout(function(){
							window.location.href=res.url;
						},1000);
					}
				},
				complete:function(){
					layer.close(_index);
				}
			})
		});
	</script>
</body>
</html>
