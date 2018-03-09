<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"F:\www\hiv/app/home\view\mobile\jiancedian_show.html";i:1520584168;s:50:"F:\www\hiv/app/home\view\mobile\header_source.html";i:1520564604;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
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
        <style>
			.fuzhu_title{margin-left: 10px;font-size: 12px;}
        </style>
    </head>
    <body>
		<div class="weui-panel">
			<div class="weui-panel__bd">
				<div class="weui-media-box weui-media-box_small-appmsg">
					<div class="weui-cells">
						<a class="weui-cell weui-cell_access" href="javascript:;">
							<div class="weui-cell__hd"></div>
							<div class="weui-cell__bd weui-cell_primary">
								<p><?php echo $info['name']; ?></p>
							</div>

						</a>
						<a class="weui-cell weui-cell_access" href="<?php echo $info['map_url']; ?>" style="color:red;">
							<div class="weui-cell__hd"><i class="fa fa-map-marker"></i></div>
							<div class="weui-cell__bd weui-cell_primary fuzhu_title">
								<p><?php echo $info['address']; ?></p>
							</div>
						</a>
						<a class="weui-cell weui-cell_access" href="tel:<?php echo $info['phone']; ?>" style="color:red;">
							<div class="weui-cell__hd"><i class="fa fa-phone"></i></div>
							<div class="weui-cell__bd weui-cell_primary fuzhu_title">
								<p><?php echo $info['phone']; ?></p>
							</div>
						</a>
						<a class="weui-cell weui-cell_access" href="javascript:;">
							<div class="weui-cell__hd"><i class="fa fa-clock-o"></i></div>
							<div class="weui-cell__bd weui-cell_primary fuzhu_title">
								<p><?php echo $info['service_time']; ?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="weui-panel__bd">
                <div class="weui-media-box weui-media-box_text">
                    <h4 class="weui-media-box__title">检测方式</h4>
                    <p class="weui-media-box__desc"><?php echo $info['jiance_way']; ?></p>
                </div>
            </div>
            <div class="weui-panel__bd">
                <div class="weui-media-box weui-media-box_text">
                    <h4 class="weui-media-box__title">检测说明</h4>
                    <p class="weui-media-box__desc"><?php echo $info['jiance_explation']; ?></p>
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
    </body>
</html>