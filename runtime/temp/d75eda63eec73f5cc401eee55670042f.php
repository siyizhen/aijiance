<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"F:\www\hiv/app/home\view\mobile\page_show.html";i:1520491168;s:50:"F:\www\hiv/app/home\view\mobile\header_source.html";i:1520564604;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
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
    <body>
    	<article class="weui-article">
            <h1 class="lists_detail_title"><?php echo $info['title']; ?></h1>
            <hr class="fengei" />
            <section>
                <section>
                    <?php echo $info['content']; ?>
                </section>
            </section>
        </article>
        
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
    </body>
</html>