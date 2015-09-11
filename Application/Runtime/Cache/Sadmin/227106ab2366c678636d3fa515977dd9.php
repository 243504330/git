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


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="alert alert-error">
				 <button type="button" class="close" data-dismiss="alert">×</button>
				<h4>
					提示!
				</h4> <strong>警告!</strong> 请注意你的个人隐私安全.
			</div>
			
	
	


			<div class="row-fluid">
				<div class="span3">
					<ul class="nav nav-list">
						<li class="nav-header">
							列表标题
						</li>
						<li class="active">
							<a href="<?php echo U('salon/index');?>">沙龙首页列表</a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#">应用</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">帮助</a>
						</li>
					</ul>
				</div>
				<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/jquery-form.js"></script>
<script>
	var sid = "<?php echo ($_GET['id']); ?>";
	$(function(){
		$("#put").click(function(){
			var formData = new FormData();
			var img = $("#img");
			formData.append("img",img[0].files[0]);
			$.ajax({
				url:"/git/index.php/Sadmin/img/add/id/"+sid,
				type:"POST",
				data:formData,sid,
   				contentType: false,
   				processData: false,
				success:function(data){
					if(data.status ==0){
						alert(data.img);
					}else{
						$("#ji").append(data.status);
					}
				},
				error:function(){
					alert("致命错误");
				}
			})

			//这个里的DEBUG流程，要学，别瞎跳，有逻辑，事半功倍。懂？要一步一步排除。好了，就这样把
			//点击的时候，你没发现你的表单没提交了吗？是，所以你要return false把点击事件取消！ submit是会提交表单的，button不会，但是submit一样可以取消提交表单，具体怎么做，我忘记了，
			//应该不是单独的return false，现在我们先用button代替
			//点击没反映。第一步看Console，这里有个JS错误，所以要先解决JS错误
			//js执行成公后，看网络请求
			return false;
		})
	})

</script>

<form class="form-horizontal" method="post"  action=" " enctype="multipart/form-data" id="myform">

<input type="file" class="input-xlarge" name="img" id="img">

<input type="button" value="保存" id="put"></input>
</form>
<div id="ji"></div>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>