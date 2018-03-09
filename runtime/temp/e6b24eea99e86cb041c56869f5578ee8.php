<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"F:\www\hiv/app/admin\view\content\edit.html";i:1520555808;s:42:"F:\www\hiv/app/admin\view\common\head.html";i:1519691410;s:42:"F:\www\hiv/app/admin\view\common\foot.html";i:1519691410;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo config('sys_name'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__STATIC__/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
    <link rel="stylesheet" href="__STATIC__/common/css/font.css" media="all">
</head>
<body class="skin-<?php if(!empty($_COOKIE['skin'])){echo $_COOKIE['skin'];}else{echo '0';setcookie('skin','0');}?>">
<link rel="stylesheet" href="__STATIC__/plugins/spectrum/spectrum.css">
<style>
    .edui-editor{z-index: 1!important;}
</style>
<script>
    var ADMIN = '__ADMIN__';
    var UPURL = "<?php echo url('UpFiles/upImages'); ?>";
    var PUBLIC = "__PUBLIC__";
    var imgClassName,fileClassName;
</script>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script src="__STATIC__/common/js/jquery.2.1.1.min.js"></script>
<script>
    var edittext=new Array();
</script>
<script src="__STATIC__/ueditor/ueditor.config.js" type="text/javascript"></script>
<script src="__STATIC__/ueditor/ueditor.all.min.js" type="text/javascript"></script>
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo $title; ?></legend>
    </fieldset>
    <form class="layui-form" method="post">
    <?php if($info['id'] != ''): ?><input TYPE="hidden" name="id" value="<?php echo $info['id']; ?>"><?php endif; if(input('param.catid') == 13): ?>
        <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-4">
                <input type="text" placeholder="请输入姓名" lay-verify="required" class="layui-input" name="username" value=""> 
            </div>
            <div class="layui-form-mid layui-word-aux red">*必填</div>
        </div>
        <?php endif; if(MODULE_NAME == 'jiancedian'): ?>
        <div class="layui-form-item">
            <label class="layui-form-label">城市</label>
            <div class="layui-input-inline">
                <select name="province" id="province" lay-verify="required" lay-filter="province">
                    <option value="">请选择省</option>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="city" id="city" lay-verify="required" lay-filter="city">
                    <option value="">请选择市</option>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="district" id="district" lay-verify="required" lay-filter="district">
                    <option value="">请选择县区</option>
                </select>
            </div>
        </div>

        <input type="hidden" value="<?php echo input('param.catid'); ?>" name="catid">
        <input type="hidden" value="" name="createtime">

        <script type="text/javascript">
            $.ajax({
                url: "<?php echo url('base/base/getRegion'); ?>",
                type: 'GET',
                dataType: 'json',
                data: {pid:1,type:1},
                success:function(res){
                    var str='<option value="">请选择省</option>';
                    $.each(res, function(index, val) {
                        if(val.id=="<?php echo $info['province']; ?>"){
                            str+='<option value="'+val.id+'" selected="">'+val.name+'</option>';
                        }else{
                            str+='<option value="'+val.id+'">'+val.name+'</option>';
                        }
                    });
                    $("#province").html(str);
                    $("#city").html('<option value="">请选择市</option>');
                    $("#district").html('<option value="">请选择区县</option>');

                    layui.use(['form'], function () {
                        var form = layui.form;
                        form.render();
                    })
                }
            });

            layui.use(['form'], function () {
                var form = layui.form;
                
                form.on('select(province)', function(data){
                    var province=data.value;
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
                            form.render();
                        }
                    })
                });

                form.on('select(city)', function(data){
                    var city=data.value;
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
                            form.render();
                        }
                    })
                }); 

                $.ajax({
                    url: "<?php echo url('base/base/getRegion'); ?>",
                    type: 'GET',
                    dataType: 'json',
                    data: {pid:"<?php echo $info['province']; ?>",type:2},
                    success:function(res){
                        var str='<option value="">请选择城市</option>';
                        $.each(res, function(index, val) {
                            if("<?php echo $info['city']; ?>"==val.id){
                                str+='<option value="'+val.id+'" selected="selected">'+val.name+'</option>';
                            }else{
                                str+='<option value="'+val.id+'">'+val.name+'</option>';
                            }
                        });
                        $("#city").html(str);
                        $("#district").html('<option value="">请选择区县</option>');
                        
                        $.ajax({
                            url: "<?php echo url('base/base/getRegion'); ?>",
                            type: 'GET',
                            dataType: 'json',
                            data: {pid:"<?php echo $info['city']; ?>",type:3},
                            success:function(res){
                                var str='<option value="">请选择区县</option>';
                                $.each(res, function(index, val) {
                                    if("<?php echo $info['district']; ?>"==val.id){
                                        str+='<option value="'+val.id+'" selected="selected">'+val.name+'</option>';
                                    }else{
                                        str+='<option value="'+val.id+'">'+val.name+'</option>';
                                    }
                                });
                                $("#district").html(str);
                                form.render();
                            }
                        }); 
                    }
                })
            })   
        </script>
        <?php endif; if(is_array($fields) || $fields instanceof \think\Collection || $fields instanceof \think\Paginator): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;if(!empty($r['status'])): ?>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo $r['name']; ?></label>
                    <div class="layui-input-4" id="box_<?php echo $r['field']; ?>">
                        <?php echo getform($form,$r,input($r['field'])); ?>
                    </div>
                </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="button" class="layui-btn" lay-submit="" lay-filter="submit"><?php echo lang('submit'); ?></button>
                <?php if(MODULE_NAME == 'page'): ?>
                <a href="<?php echo url('category/index'); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
                <?php else: ?>
                <a href="<?php echo url('index',['catid'=>input('catid')]); ?>" class="layui-btn layui-btn-primary"><?php echo lang('back'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>
<script src='__STATIC__/plugins/spectrum/spectrum.js'></script>
<script src='__ADMIN__/js/edit.js'></script>
<script src='__STATIC__/common/js/layui-mz-min.js'></script>
<script>
    var thumb,pic,file;
    <?php if(ACTION_NAME=='add'): ?>
    var url= "<?php echo url('insert'); ?>";
    <?php else: ?>
        var url= "<?php echo url('update'); ?>";
    <?php endif; ?>

    layui.use(['form','upload','layedit','laydate','jquery'], function () {
		
        var form = layui.form,upload = layui.upload,layedit = layui.layedit,laydate = layui.laydate,$ = layui.jquery;;
		layui.selMeltiple($);
        //缩略图上传
        upload.render({
            elem: '#thumbBtn'
            ,url: '<?php echo url("UpFiles/upload"); ?>'
            ,accept: 'images' //普通文件
            ,exts: 'jpg|png|gif' //只允许上传压缩文件
            ,done: function(res){
                console.log(res);
                $('#cltThumb').attr('src', "__PUBLIC__"+res.url);
                $('#thumb').val(res.url);
            }
        });
        //多图片上传
        var imagesSrc;
        upload.render({
            elem: '#test2'
            ,url: '<?php echo url("UpFiles/upImages"); ?>'
            ,multiple: true
            ,done: function(res){
                $('#demo2 .layui-row').append('<div class="layui-col-md3"><div class="dtbox"><img src="__PUBLIC__'+ res.src +'" class="layui-upload-img"><input type="hidden" class="imgVal" value="'+ res.src +'"> <i class="delimg layui-icon">&#x1006;</i></div></div>');
                imagesSrc +=res.src+';';
            }
        });
        //日期
        laydate.render({
            elem: '#addtime', //指定元素
            type:'datetime',
            format:'yyyy-MM-dd HH:mm:ss'
        });
        form.on('submit(submit)', function (data) {
            if(edittext){
                for (key in edittext){
                    data.field[key] = $(window.frames["LAY_layedit_"+edittext[key]].document).find('body').html();
                }
            }
            var images='';
            $(".imgVal").each(function(i) {
                images+=$(this).val()+';';
            });
            data.field.images = images;
            $.post(url, data.field, function (res) {
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        location.href = res.url;
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        });
        $('.layui-row').on('click','.delimg',function(){
            var thisimg = $(this);

            layer.confirm('你确定要删除该图片吗？', function(index){
                thisimg.parents('.layui-col-md3').remove();
                layer.close(index);
            })
        })
    });

</script>