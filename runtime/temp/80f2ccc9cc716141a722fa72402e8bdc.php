<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"F:\www\hiv/app/user\view\pc\my_order.html";i:1519968240;s:44:"F:\www\hiv/app/user\view\pc\user_header.html";i:1519954064;s:42:"F:\www\hiv/app/user\view\pc\user_left.html";i:1519967562;s:44:"F:\www\hiv/app/user\view\pc\user_footer.html";i:1519955022;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php if($info['title']): ?><?php echo $info['title']; elseif($title): ?><?php echo $title; else: ?><?php echo $sys['title']; endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php if($info['keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info['description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
    <link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/bootstrap.min.css" rel="stylesheet">
    <link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/font-awesome.css" rel="stylesheet">
    <link href="__HOME__/pc/demo/business-template/V398/template/CmsEasy_V_398/skin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="__HOME__/pc/public/index/layui/css/layui.css">
    <link rel="stylesheet" href="__HOME__/pc/public/index/css/global.css"> 
    <!--[if IE]>
    <script src="__HOME__/pc/public/index/js/html5.js"></script>
    <![endif]-->
</head>
<body id="mar_body">

<div class="hidden-xs">
    <div id="header" class="clearfix">
        <div class="">
            <div class="logo-box">
            	<a href="<?php echo url('home/index/index'); ?>"><img src="__PUBLIC__<?php echo $sys['logo']; ?>" alt="<?php echo $sys['name']; ?>" />
            </div>
            <div class="menu">
                <ul>
                    <li <?php if($controller == index): ?>class="on"<?php endif; ?>><a href="<?php echo url('home/index/index'); ?>">网站首页</a></li>
					<li><a href="">防艾险</a></li>
					<li><a href="">问卷中心</a></li>
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

<div class="main fly-user-main layui-clear layui-anim">
    <div class="layui-side layui-bg-black lnk_nav">
        <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree">
            <li class="layui-nav-item <?php if(in_array(request()->action(),['myorder','myOrder'])):?>layui-this<?php endif;?>">
                <a href="<?php echo url('myOrder'); ?>">申请记录</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">我的消息 <span class="layui-badge">9</span></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">我的防艾险 <span class="layui-badge">保障中</span></a>
            </li>
            <li class="layui-nav-item <?php if(in_array(request()->action(),['myinfo','myInfo'])):?>layui-this<?php endif;?>">
                <a href="<?php echo url('myInfo'); ?>">个人资料</a>
            </li>
            <li class="layui-nav-item <?php if(in_array(request()->action(),['myaddress','myAddress'])):?>layui-this<?php endif;?>">
                <a href="<?php echo url('myAddress'); ?>">我的地址</a>
            </li>
            <li class="layui-nav-item <?php if(in_array(request()->action(),['mysuggestion','mySuggestion'])):?>layui-this<?php endif;?>">
                <a href="<?php echo url('mySuggestion'); ?>">意见反馈 <?php if($messageNums > 0): ?><span class="layui-badge"><?php echo $messageNums; ?></span><?php endif; ?></a>
            </li>
        </ul>
        </div>
    </div>
    <div class="site-tree-mobile layui-hide">
        <i class="layui-icon">&#xe602;</i>
    </div>
    <div class="site-mobile-shade"></div>

    <div class="fly-panel fly-panel-user" style="margin-top: 70px;">
        <!--申请记录-->
        <table class="layui-table">
            <thead>
                <tr>
                    <th>邮寄点</th>
                    <th>收件人</th>
                    <th>金额</th>
                    <th>状态</th>
                    <th>物流</th>
                    <th>进程</th>
                    <td>申请时间</td>
                    <th>操作</th>
                </tr> 
            </thead>
            <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $m['youjidian']; ?></td>
                    <td><?php echo $m['shoujianren']; ?></td>
                    <td><?php echo $m['money']; ?>￥</td>
                    <td>
                        <?php if($m['origin_payway'] == 1): ?>
                        <?php echo $m['payway']; else: ?>
                        <?php echo $m['pay_status']; ?>(<?php echo $m['payway']; ?>)
                        <?php endif; ?>
                    </td>
                    <th>
                        <?php echo $m['shipping_status']; if($m['origin_shipping_status'] == 2): ?>
                        (<a href="javascript:;" class="wuliu_detail">查看</a>)
                        <?php endif; ?>
                    </th>
                    <td>
                        <a href="javascript:;" style="color: red;" <?php if(in_array($m['origin_process'],[3,4])): ?>class="shangchuan"<?php endif; ?>><?php echo $m['process']; ?></a>
                    </td>
                    <td><?php echo date("Y-m-d H:i",$m['addtime']); ?></td>
                    <td>
                        <span class="layui-breadcrumb" lay-separator="|">
                            <a href="javascript:;" class="order_detail">详情</a>
                            <a href="javascript:;" <?php if($m['origin_order_status'] == 1): ?>class="cancel"<?php else: ?>style="color: red !important;"<?php endif; ?>><?php echo $m['order_status']; ?></a>
                        </span>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- <tr>
                    <td>长沙青彩邮寄点</td>
                    <td>汪忠良量</td>
                    <td>23￥</td>
                    <td>已付款(货到付款)</td>
                    <th>未发货（<a href="javascript:;" class="wuliu_detail">查看</a>）</th>
                    <td><a href="javascript:;" style="color: red;" class="shangchuan">上传结果</a></td>
                    <td>
                        <span class="layui-breadcrumb" lay-separator="|">
                            <a href="">取消</a>
                            <a href="javascript:;" class="order_detail">详情</a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>长沙青彩邮寄点</td>
                    <td>汪忠良量</td>
                    <td>23￥</td>
                    <td>已付款(货到付款)</td>
                    <th>未发货（<a href="javascript:;" class="wuliu_detail">查看</a>）</th>
                    <td><a href="javascript:;" style="color: red;" class="shangchuan">上传结果</a></td>
                    <td>
                        <span class="layui-breadcrumb" lay-separator="|">
                            <a href="">取消</a>
                            <a href="javascript:;" class="order_detail">详情</a>
                        </span>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <div style="text-align: center;"><?php echo $page; ?></div>
    </div>
</div>

<div class="footer">
    <p style="padding-left:245px;"><a href="statute/index.shtml"><?php echo $sys['name']; ?></a> <?php echo $sys['copyright']; ?> &copy; <a href="">艾检测工作室提供技术支持</a></p>
</div>
<script src="__HOME__/pc/public/index/js/jquery-2.0.3.min.js"></script>
<script src="__HOME__/pc/js/layer/layer.js"></script>
<script src="__HOME__/pc/public/index/layui/layui.js"></script>
<script src="__STATIC__/plugins/jquery_cookie/jquery.cookie.js"></script>

<script>
	layui.cache.page = 'user';
	layui.cache.user = {
		uid: -1
	};
	layui.config({
		version: "2.0.0"
		,base: '__HOME__/pc/public/index/mods/'
	}).extend({
		fly: 'index'
	}).use('fly');

    layui.use(['laydate','laypage'], function(){
        var laydate = layui.laydate;
        var laypage = layui.laypage;

        laypage.render({
            elem:'pages',count: 1000,limit: 100,limits: [100, 300, 500]
        });

        //常规用法
        laydate.render({
            elem: '#birthday'
        });
    });

    //物流详情
    $(".wuliu_detail").click(function() {
        var wuliu_detail='<ul class="layui-timeline"><li class="layui-timeline-item"><i class="layui-icon layui-timeline-axis"></i><div class="layui-timeline-content layui-text"><h3 class="layui-timeline-title">长沙站</h3><p>快递员正在派件中</p></div></li><li class="layui-timeline-item"><i class="layui-icon layui-timeline-axis"></i><div class="layui-timeline-content layui-text"><h3 class="layui-timeline-title">长沙站</h3><p>快递员正在派件中</p></div></li><li class="layui-timeline-item"><i class="layui-icon layui-timeline-axis"></i><div class="layui-timeline-content layui-text"><h3 class="layui-timeline-title">长沙站</h3><p>快递员正在派件中</p></div></li></ul>';
        layui.layer.open({
            type: 1,
            title: '物流详情',
            area: ['600px', '70%'], //宽高
            content: wuliu_detail
        });
    });
    //订单详情
    $(".order_detail").click(function() {
        var order_detail='<table class="layui-table" style="width:1170px;margin-left:10px;"><tbody><tr align="center"><td class="pre_title">订单号</td><td>201708451211</td><td class="pre_title">邮寄点</td><td>长沙青彩邮寄点</td><td class="pre_title">收件人</td><td>汪忠良</td></tr><tr align="center"><td class="pre_title">电话</td><td>15274985005</td><td class="pre_title">订单状态</td><td>已付款(货到付款)</td><td class="pre_title">金额</td><td>23￥</td></tr><tr align="center"><td class="pre_title">付款时间</td><td>2017-08-18 17:50:30</td><td class="pre_title">发货时间</td><td>2017-08-18 17:50:30</td><td class="pre_title">是否发货</td><td>是</td></tr><tr><td class="pre_title" align="center">收货地址</td><td colspan="5" align="left">长沙大学</td></tr></tbody></table>';
        layui.layer.open({
            type: 1,
            area: ['1200px', '40%'], //宽高
            content: order_detail
        });
    });
    //上传结果
    $(".shangchuan").click(function() {
        layer.open({
            type: 2,
            title: '结果上传',
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['893px', '300px'],
            content: 'upload.html'
        });
    });
    //更换手机
    function changePhone(){
        layer.open({
            type: 2,
            title: '更换手机',
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['700px', '300px'],
            content: "<?php echo url('changePhone'); ?>"
        });
    }
    //意见反馈
    function fankui(){
        layer.open({
            type: 2,
            title: '感谢您的反馈！',
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['893px', '350px'],
            content: "<?php echo url('addSuggestion'); ?>"
        });
    }
</script>
</body>
</html>
