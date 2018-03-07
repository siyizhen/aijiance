<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"F:\www\hiv/app/home\view\pc\message.html";i:1520232564;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>信息提示</title>
    <!-- Icons -->
    <link href="__HOME__/pc/css/font-awesome.min.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="__HOME__/pc/css/message.css" rel="stylesheet">
</head>

<body class="app flex-row align-items-center" onLoad="redirect()" style="background: #FFF;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="clearfix">
					<?php switch ($param['type']) {case 'success':?>
                    	<h1 class="float-left display-3 mr-2"><i class="fa fa-smile-o"></i></h1>
                    	<h4 class="pt-1"><?php echo($param['msg']);?></h4>
                    	<h6 class="pt-1"><span id="num"></span>秒后自动跳转。</h6>
                    		<?php break;case 'error':?>
            			<h1 class="float-left display-3 mr-2"><i class="fa fa-frown-o"></i></h1>
	                    <h4 class="pt-1"><?php echo($param['msg']);?></h4>
	                    <h6 class="pt-1"><span id="num"></span>秒后自动跳转。</h6>
	                    	<?php break;} ?>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var num="<?php echo($param['wait']);?>";
        function redirect(){
            num--;
            document.getElementById("num").innerHTML=num;
            if(num<=0){
                document.getElementById("num").innerHTML=0;
                location.href="<?php echo($param['url']);?>";
                }
            }
        setInterval("redirect()", 1000);
    </script>
</body>
</html>