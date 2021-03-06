<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>公司主页3</title>
	<link href="/product/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/product/Public/css/modern-business.css" rel="stylesheet">
    <link href="/product/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
					<a class="navbar-brand" href="/product">互联网金融</a>
				</div>
				<!--其他链接 -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo U('salon/index');?>">关于我们</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">产品项目<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="portfolio-1.html">创业沙龙</a>
								</li>
								<li>
									<a href="#-2.html">第二个专栏</a>
								</li>
								<li>
									<a href="#-3.html">第三个专栏</a>
								</li>
								<li>
									<a href="#-4.html">第四个专栏</a>
								</li>
								
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- 其他链接结束 -->
			</div>
		</nav>
<!--  导航结束 -->

<header id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>


<!-- 滚动包装 -->
<div class="carousel-inner">
	<div class="item active">
		<div class="fill" style="background-image:url('/product/Public/images/fish.jpg');"></div>
		<div class="carousel-caption">
			<h2>标题 1</h2>
		</div>
	</div>
	<div class="item">
		<div class="fill" style="background-image:url('/product/Public/images/title.jpg')"></div>
		<div class="carousel-caption">
			<h2>标题2</h2>
		</div>
	</div>
	<div class="item">
		<div class="fill" style="background-image:url('/product/Public/images/qw.jpg')"></div>
		<div class="carousel-caption">
			<h2>标题3</h2>
		</div>
	</div>
</div>
<!-- 左右按键 -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	<span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
	<span class="icon-next">
</a>
<!-- 结束 -->
</header>


<!-- 内容部分 -->
<div class="container">






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

<script src="/product/Public/js/jquery.js"></script>
<script src="/product/Public/js/bootstrap.min.js"></script>
<script>
$('.carousel').carousel({
	interval:5000
})
</script>

</body>
</html>