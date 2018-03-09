<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"F:\www\hiv/app/home\view\mobile\jiancedian_list.html";i:1520576336;s:50:"F:\www\hiv/app/home\view\mobile\header_source.html";i:1520564604;s:50:"F:\www\hiv/app/home\view\mobile\footer_tabbar.html";i:1520575764;}*/ ?>
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
    	<div class="weui-panel weui-panel_access">
            <div class="weui-panel__hd position_title">
            <span class="fa fa-map-marker location_map"></span> 
            <span id="location">定位中…</span>
            <br />
            <span class="change_location" id="change_location">[更改]</span>
            </div>
            <div class="weui-panel__bd">
                
            </div>
            
            <div class="weui-loadmore weui-loadmore_line" style="display: none;">
                <span class="weui-loadmore__tips">暂无数据更多数据</span>
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
        <script type="text/javascript" src="__HOME__/mobile/js/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="__HOME__/mobile/js/jquery-weui.min.js" charset="utf-8"></script>
    	<script type="text/javascript" src="__HOME__/mobile/js/city-picker.js" charset="utf-8"></script>
        <script src="__STATIC__/plugins/jquery_cookie/jquery.cookie.js"></script>

        <?php if($whereIs == mobile): ?>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=3.0&ak=<?php echo config('baidu_ak.location'); ?>"></script>
        <?php endif; ?>
    	<script type="text/javascript">

            var province='',city='';
    		$("#change_location").cityPicker({
				title: "请选择城市",
                showDistrict: false,
				onClose:function(data){
					var province_name=data.cols[0].displayValue;
					province=data.cols[0].value;

					var city_name=data.cols[1].displayValue;
					city=data.cols[1].value;
					
					$("#location").html(province_name+' '+city_name);
                    page=1;
                    $(".weui-panel__bd").html('');
                    getData(latitude,longitude);
				},
			});

            var loading = false;  //状态标记
            $(document.body).infinite().on("infinite", function() {
                if(loading) return;
                loading = true;
                getData($.cookie("latitude"),$.cookie("longitude"));
            });

            //手机端
            "<?php if($whereIs == mobile): ?>"
            var latitude,longitude;
            if(typeof $.cookie("location") != 'undefined' && ($.cookie("location")!=''||$.cookie("location")!=null)){
                $("#location").html($.cookie("location"));
                //获取数据
                getData($.cookie("latitude"),$.cookie("longitude"));
            }else{
                var geolocation = new BMap.Geolocation();
                geolocation.getCurrentPosition(function(position) {
                    if(position==null){
                        $("#location").html('定位失败');
                    }else{  
                        latitude=position.latitude;
                        longitude=position.longitude;
                        //获取数据
                        getData(latitude,longitude);
                        $.getScript("http://api.map.baidu.com/geocoder/v2/?callback=showLocation&location="+latitude+","+longitude+"&output=json&ak=<?php echo config('baidu_ak.location'); ?>");
                    }
                });

                function showLocation(data){
                    var location=data.result.addressComponent.province+' '+data.result.addressComponent.city;
                    var date = new Date();
                    date.setTime(date.getTime()+30*1000);
                    $.cookie("location",location,{expires: date});
                    $.cookie("latitude",latitude,{expires: date});
                    $.cookie("longitude",longitude,{expires: date});
                    $("#location").html(location);
                }
            }
            "<?php endif; ?>"

            //拉取数据
            var page=1;
            function getData(latitude,longitude){
                $.ajax({
                    url: "<?php echo url('base/ajax/getJiancedian'); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {latitude:latitude,longitude:longitude,province:province,city:city,page:page},
                    success:function(res){
                        var str='';
                        if(res.status>0){
                            $(".weui-loadmore_line").hide();
                            $.each(res.data, function(index, val) {
                                str+='<div class="weui-media-box weui-media-box_text" urls="/home/<?php echo $controller; ?>/info/id/'+val.id+'/catId/<?php echo input("param.catId"); ?>"><h4 class="weui-media-box__title" style="font-size: 15px;">';
                                if(val.is_recommend==1){
                                    str+='<span class="weui-badge tuijian">推荐</span>';
                                }
                                str+=val.name+'</h4><p class="weui-media-box__desc">'+val.address+'</p></div>';
                            });
                            $(str).appendTo($(".weui-panel__bd"));
                            page++;
                            turns();
                        }else{
                            $(".weui-loadmore_line").show();
                            $(document.body).destroyInfinite();
                        }
                    }
                })
            }

            function turns(){
                $(".weui-media-box_text").click(function() {
                    var urls=$(this).attr('urls');
                    window.location.href=urls;
                });
            }
    	</script>
    </body>
</html>