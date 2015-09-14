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
<script src="/git/Public/js/jquery-form.js"></script>
<script>
	$(function(){
		var id = "<?php echo ($_GET['id']); ?>";
		$.ajax({
			url:"../../edite/id/"+id,
			type:"POST",
			success:function(data){
				if(data.status === 0){
					var data = data.data;
					$.each(data,function(i,obj){
						
						$("#myform").html(
							"<fieldset>"+

							"<div id='legend' class=''><legend class=''>表单名"+data.id+"</legend></div>"+
							"<div class='control-group'><label class='control-label' for='input01'>嘉宾</label><div class='controls'><div class='textarea'><textarea placeholder='' type='' class='' name='compere'>"+data.compere+"</textarea>"+
							"</div><p class='help-block'></p></div></div>"+

							"<div class='control-group'><label class='control-label' for='input01'>企业</label><div class='controls'><input type='text' placeholder='placeholder' class='input-xlarge' name='title' id='title' value='"+data.title+"'><p class='help-block'></p></div></div>"+

                			"<div class='control-group'><label class='control-label'>嘉宾</label><div class='controls'><div class='textarea'><textarea placeholder='' type='' class='' name='guest'>"+data.guest+"</textarea></div></div></div>"+

                			"<div class='control-group'><label class='control-label'>图片上传</label><div class='controls'><input class='input-file' type='file' name='img' id='img'></div></div>"+


                			"<input type='button' id='sub'  value='提交修改'>"+

                			"</fieldset>"

						)
					})
					$("#sub").click(function(){
						var formData = new FormData();
						var img = $("#img");
						formData.append("img",img[0].files[0]);
						formData.append("title",$("#title").val());
						$.ajax({
							
							url:"/git/index.php/Sadmin/salon/save_data",
							type:"POST",
							data:formData,
							contentType: false,
   							processData: false,
							success:function(data){
								console.log(data);
							},
							error:function(){
								alert("致命错误");
							}
						})
					})
				}
			}
		})
	})


</script>
<script>


</script>
<form class="form-horizontal" method="post" ectype="multipart/form-data" id="myform">


</form>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>