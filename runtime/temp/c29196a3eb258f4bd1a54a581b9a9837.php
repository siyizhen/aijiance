<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"F:\www\hiv/app/home\view\mobile\page_apply_reagent.html";i:1520473234;s:50:"F:\www\hiv/app/home\view\mobile\header_source.html";i:1520564604;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,viewport-fit=cover">
        <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
<link rel="stylesheet" href="__HOME__/mobile/css/weui.css">
<link rel="stylesheet" href="__HOME__/mobile/css/mobile.css">
<link rel="stylesheet" href="__HOME__/mobile/css/jquery-weui.min.css">
<link rel="stylesheet" href="__HOME__/mobile/css/font-awesome.min.css">
<style>
	.my_select{width: 31%;height:27px;line-height: 27px;}
	.weui-tabbar{position: fixed;}
	.weui-article,.weui-panel{margin-bottom: 60px;}
</style>
    </head>
    <body style="background: #eee;">
    	<div class="card" onclick="turn(this)" urls="<?php echo url('home/question/question'); ?>">
    		<div class="card-header"><p>参加问卷调查</p></div>
    		<div class="card-content">
			    <div class="card-content-inner" style="text-align: center;">
		        为了后续争取公益伙伴的支持以提升我们的服务，我们恳请您参加一项问卷调查，这会帮到我们很多，对您的支持，我们不胜感激!
		      </div>
		    </div>
    	</div>

    	<div class="card" onclick="turn(this)" urls="<?php echo url('home/order/mobileReagent'); ?>?preferUrl=<?php echo url('home/order/mobileReagent'); ?>">
    		<div class="card-header"><p>直接申请试剂</p></div>
    		<div class="card-content">
				<div class="card-content-inner" style="text-align: center;">
		        我并不想填写问卷，直接进入申请页面
		    	</div>
		    </div>
    	</div>

    	<div style="margin: .5rem" onclick="turn(this)" urls="<?php echo url('home/baoxian/index'); ?>">
    		<div class="swiper-container swiper-no-swiping">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
                        <img src="__HOME__/mobile/images/baoxian.jpg" alt="" width="100%">
                    </div>
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
        <script type="text/javascript" src="__HOME__/mobile/js/jquery.min.js"></script>
        <script type="text/javascript">
            function turn(obj){
                var urls=$(obj).attr('urls');
                window.location.href=urls;
            }
        </script>
    </body>
</html>