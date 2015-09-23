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
									<a href="<?php echo U('salon/index');?>">创业沙龙</a>
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


<script src="/git/Public/js/jquery.js"></script>
<script>
	$(function(){		
		$.ajax({
			url:"/git/index.php/Home/salon/index_data",
			type:"POST",
			success:function(data){
				if(data.status === 0){
					var data = data.data;
					$.each(data,function(i,obj){
						$("#data_form").append(
							"<div class='row'><div class='col-md-7'><a href='/git/index.php/Home/salon/salon/id/"+obj.id+"'><img class='img-responsive img-hover' src='/git/Public/images/"+obj.img+"'></a></div>"+
							"<div class='col-md-5'><h3>"+obj.title+"</h3><h4>出席嘉宾:</h4><p><ul>"+obj.compere+"</ul><h4>出席企业:</h4><ul>"+obj.guest+"</ul></p><a class='btn btn-primary' href='/git/index.php/salon/salon/id/"+obj.id+"'>进入查看详情</i></a></div>"+
							"</div><hr>"
						)
					})					
				}
			}
		})		
	})

</script>

<div class="container" id="myform">
	<div class='row'>
		<div class='col-lg-12'>
			<h3 class='page-header'>创业沙龙
				<samll></samll>
			</h1>
			<ol class='breadcrumb'>
				<li>
					<a href='index.html'>首页</a>
				</li>
				<li class='active'>创业沙龙</li>
			</ol>
		</div>
	</div>


	<div id='data_form'>
	
	</div>

		<hr>
		<!-- 临时分页 -->
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="pagination">
					<li>
						<a href="#">&laquo;</a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">&raquo;</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- 临时分页end -->	


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