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
    <link href="/git/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>	
		<!-- 导航  -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">导航开关</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo U('index/index');?>">互联网金融</a>
				</div>
				<!--其他链接 -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">关于我们<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo U('about/index');?>">公司简介</a>
								</li>
								<li>
									<a href="<?php echo U('about/jiaru');?>">加入我们</a>
								</li>
								<li>
									<a href="<?php echo U('about/hezuo');?>">商务合作</a>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">产品项目<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo U('salon/index');?>">互联网沙龙</a>
								</li>
								<li>
									<a href="#">网金汇俱乐部</a>
								</li>
								<li>
									<a href="#">深圳互联网财经栏目</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- 其他链接结束 -->
			</div>
		</nav>
<!--  导航结束 -->

	<!-- 内容 -->
	<div class="container">
		<!-- 内容头 -->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">沙龙详情 
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo U('salon/index');?>">首页</a></li>
					<li class="active">沙龙详情</li>
				</ol>
			</div>
		</div>
		<!-- 内容头end-->
		<!-- 沙龙内容 -->
		<script src='/git/Public/js/jquery.js'></script>
		<script>
			var id = "<?php echo ($_GET['id']); ?>";
			$(function(){
				$.ajax({
					url:"/git/index.php/Home/Salon/salon_data/id/"+id,
					type:"POST",
					success:function(data){
						if(data.status === 0){
							var data = data.data;
							$.each(data,function(i,obj){
								$("#div2").append(
									"<div class='col-sm-3 img-portfolio'><a href='#'><img class='img-responsive img-hover img-related' src='/git/Public/images/"+obj.img+"'></a></div>"
								)
							})
						}
					}
				})
			})
		</script>
		<script>
			var id = "<?php echo ($_GET['id']); ?>";
			$(function(){
				$.ajax({
					url:"/git/index.php/Home/Salon/salon_data_2/id/"+id,
					type:"POST",
					success:function(data){
						if(data.status === 0){
							var data = data.data;
							$.each(data,function(i,obj){
								
								$("#one").html(
									"<img class='img-responsive' src='/git/Public/images/"+obj.bimg1+"'>"
								),
								$("#two").html(
									"<img class='img-responsive' src='/git/Public/images/"+obj.bimg2+"'>"
								),
								$("#three").html(
									"<img class='img-responsive' src='/git/Public/images/"+obj.bimg3+"'>"
								),
								$("#data").html(
									"<h3>沙龙描述</h3><p>"+obj.says+"</p>"+
									"<h3>沙龙细节</h3>"+obj.details
								)
							})
						}
					}
				})
			})
		</script>
		<div class="row">
			<div class="col-md-8">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- 指示 -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- 指示 end -->
					<!-- 图片 -->
					<div class="carousel-inner">
						
							<div class='item active' id='one'></div>
							<div class='item' id='two'></div>
							<div class='item' id='three'></div>
						
					</div>
					<!-- 图片end -->
					<!-- 按钮 -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					<!-- 按钮end -->
				</div>
			</div>
			<!-- 右边提示 -->
			<div class="col-md-4">
				<div id="data">
				
				
				</div>
				
			</div>
			<!-- 右边提示end -->
		</div>
		<!--content end -->
		<!-- 图片展示 -->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">相关图片</h3>
			</div>
			<div id="div2">

			</div>


		</div>
		<!-- 图片展示end -->


	<hr>
	<!-- 脚 -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; 2015</p>
			</div>
		</div>
	</footer>

</div>

<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>
<script>
$('.carousel').carousel({
	interval:5000
})
</script>

</body>
</html>