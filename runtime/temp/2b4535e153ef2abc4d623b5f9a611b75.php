<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"F:\www\hiv/app/home\view\mobile\index.html";i:1520489656;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta  name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta content="email=no" name="format-detection">
<title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
<link rel="stylesheet" href="__HOME__/mobile/css/style.css" type="text/css">
<link rel="stylesheet" href="__HOME__/mobile/css/fonts.css" type="text/css">
<link rel="stylesheet" href="__HOME__/mobile/css/weui.css" type="text/css">
<link rel="stylesheet" href="__HOME__/mobile/css/mobile.css">
<link rel="stylesheet" href="__HOME__/mobile/css/font-awesome.min.css">
<style>
    .weui-tabbar{position: fixed;}
    #mainBox .hd_nav a {
        border-bottom: solid 1px #ececec;
        border-top: solid 1px #ececec;
        padding-bottom: 10px;
    }
</style>
</head>

<body>
<div class="ui-banner">
    <div id="slider" class="swipe">
    <ul class="swipe-wrap">
        <?php if(is_array($adList) || $adList instanceof \think\Collection || $adList instanceof \think\Paginator): $i = 0; $__LIST__ = $adList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $vo['url']; ?>"><img src="__PUBLIC__<?php echo $vo['pic']; ?>" /></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
        <div id="slider_on">
            <ul>
                <?php if(is_array($adList) || $adList instanceof \think\Collection || $adList instanceof \think\Paginator): $i = 0; $__LIST__ = $adList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li <?php if($i == 1): ?>class="on"<?php endif; ?>></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>

<div id="mainBox">
	<div class="hd_nav">
        <a href="<?php echo url('home/reagent/index',['catId'=>15]); ?>"><i class="icon icon-laptop"></i><b>小黄盒</b></a>
    	<a href="<?php echo url('home/baoxian/index'); ?>"><i class="icon icon-library"></i><b>防艾险</b></a>
        <a href="/about/19.html"><i class="icon icon-keyboard"></i><b>保密协议</b></a>
        <a href="/about/14.html"><i class="icon icon-users"></i><b>关于我们</b></a>
        <a href="/about/20.html"><i class="icon icon-headphones"></i><b>联系我们</b></a>
        <a href="/about/21.html"><i class="icon icon-question"></i><b>常见问题</b></a>
    </div>
    <div class="title2" style="background-color: #ececec;"><h3>媒体报道</h3></div>
	<div class="stubBox">
        <div class="stub">
            <ul>
                <?php $result = db("article")->alias("a")->join("ajc_category c","a.catid = c.id","left")
            ->where("catid=17")
            ->field("a.*,c.catdir")
            ->limit(8)
            ->order("listorder asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>  
                <li>
                    <a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>">
                    	<div class="img">
                        	<img src="__PUBLIC__<?php echo $vo['thumb']; ?>">
                        </div>
                        <div class="content">
                            <h3><?php echo str_cut($vo['title'],18,'...'); ?></h3>
                            <p><?php echo str_cut(strip_tags($vo['content']),40,'...'); ?></p>
                        </div>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<div class="weui-tabbar">
    <a href="<?php echo url('home/index/index'); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[index,about])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-home"></i>
        </span>
        <p class="weui-tabbar__label">主页</p>
    </a>
    <a href="<?php echo url('home/reagent/index',['catId'=>15]); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[Order,reagent,Question])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-shopping-cart"></i>
        </span>
        <p class="weui-tabbar__label">申请试剂</p>
    </a>
    <a href="<?php echo url('home/jiancedian/index',['catId'=>22]); ?>" class="weui-tabbar__item weui-bar__item_on <?php if(in_array($controller,[jiancedian])): ?>tabon<?php endif; ?>">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-star-o"></i>
        </span>
        <p class="weui-tabbar__label">预约检测</p>
    </a>
    <!-- <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-search"></i>
        </span>
        <p class="weui-tabbar__label">查结果</p>
    </a> -->
    <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
        <span class="icon_box">
            <i class="weui-tabbar__icon tab_icon fa fa-address-book"></i>
        </span>
        <p class="weui-tabbar__label">我的</p>
    </a>
</div>
<script type="text/javascript" src="__HOME__/mobile/js/zepto.min.js"></script> 
<script type="text/javascript" src="__HOME__/mobile/js/main.js"></script>
<script type="text/javascript" src="__HOME__/mobile/js/tool.js"></script> 
<script type="text/javascript" src="__HOME__/mobile/js/swipe.js"></script>

<script>
$(function(){
$('#slider').mBanner('slider');
});
</script>
<script type="text/javascript">
$(".informationBox ul li a").click(function(){
	$(".informationBox ul li a").find("contentM").addClass("stat").siblings().removeClass("stat");
	var index=$(".informationBox ul li a").index(this);
	$(".informationBox ul li a .contentM").eq(index).css('display','block');
	var div2=$(this).find('div').get(1);
	
	if($(div2).hasClass("don")){
		$(div2).css("display","none");
		$(div2).removeClass("don");
		$($(this).find('div').get(0)).css("display","block");
	}else{
		$(".informationBox ul li a .contentM").removeClass("don");
		$(".informationBox ul li a .tit1").css("display","block");
		$(".informationBox ul li a .contentM").css("display","none");
		$(div2).css("display","block");
		$(div2).addClass("don");
		$($(this).find('div').get(0)).css("display","none");
	}
});
$("#colce").click(function(){
	$("#formBox").hide();
	});
</script>
</body>
</html>
