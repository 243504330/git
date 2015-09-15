<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>公司主页3</title>
	<link href="/git/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/git/Public/css/modern-business.css" rel="stylesheet">
    <link href="/git/Public/css/editor.css" rel="stylesheet">
    <link href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="http://www.bootcss.com/p/layoutit/css/layoutit.css" rel="stylesheet">
    <link href="/git/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

							<a href="<?php echo U('salon/index');?>">沙龙首页列表</a>


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				
				
				<script src="/git/Public/js/jquery.js"></script>
<script>
	$(function(){
		var id = "<?php echo ($_GET['id']); ?>";
		$.ajax({
			url:"../../details_save/id/"+id,
			type:"POST",
			success:function(data){
				if(data.status === 0){
					var data = data.data;
					$.each(data,function(i,obj){
						$("#form1").html(
							"<fieldset><div id='legend' class=''><legend class=''>提取地址</legend></div></fieldset>"+
							"<div class='control-group'><label class='control-label' for='input01'>标题</label><div class='controls'><div id='adre'></div></div></div>"+
							"<div class='control-group'><label class='control-label'>图片上传</label><div class='controls'><input class='input-file' type='file' name='img' id='img'></div></div>"+
							"<div class='control-group><label class='control-label'><div class='controls'><input id='sub' type='button' value='点击提取'></div></div>"+
							"<p id='adre'></p>"									
						),
						$("#form2").html(
							"<fieldset><div id='legend' class=''><legend class=''>表单</legend></div>"+
							"<div class='control-group'><label class='control-label' for='input01'>id</label><div class='controls'><input type='text' class='input-xlarge' name='sid' value='"+data.id+"' readonly='readonly'><p class='help-block'></p></div></div>"+
							"</fieldset>"
						)
					})
					$("#sub").click(function(){
						var formData = new FormData();
						var img = $("#img");
						formData.append("img",img[0].files[0]);
						$.ajax({
							url:"/git/index.php/Sadmin/salon/img_url",
							type:"POST",
							data:formData,
							contentType:false,
							processData:false,
							success:function(data){
								if(data.status === 0){
									$("#adre").html(data.img);
								}
							}
						})
					})
				}
			}
		})
	})

</script>
<form class="form-horizontal" method="post" enctype="multipart/form-data" id="form1">

</form>
<form class="form-horizontal" method="post" enctype="multipart/form-data" id="form2">

</form>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>