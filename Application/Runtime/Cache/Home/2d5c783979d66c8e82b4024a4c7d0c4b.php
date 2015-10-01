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

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">商业合作<h3/><small></small>
		</div>
		<ol class="breadcrumb">
			<li><a href="index.html">首页</a></li>
			<li class="active">商业合作</li>
		</ol>
	</div>

	<div class="row">
		<div class="col-md-12">
					
			<div class="sb">

				<h4><p>我们可以为您做什么?<br></p></h4>
				提供定制各种线下活动。从2015年起,我们携手多家业内知名机构,邀请互联网界内知名人士,举办过多场互联网金融沙龙活动。
			</div>
			<br>
			
			<div class="sb">
				
				<h4><p>参加我们的节目?<br></p></h4>
				参与节目录制的嘉宾均邀请知名互联网金融行业领军人物、行业内杰出的代表人物及业内专家学者参与录制,为节目质量奠定了良好的基础。
			</div>
				<br>
			<div class="sb">
				<h4><p>栏目特点?<br></p></h4>
				《互联网金融》以电视屏幕作为入口,整合深圳财经生活频道《经济生活》、《非常财经观察》,引入“TV to online”平台运营理念,将节目定位为电视节目与互联网金融业的价值整合,从整合的共同的利益驱动中去挖掘电视节目内容的附加价值,完成从屏幕资源到企业价值的置换。
			</div>
			<br>
			<div class="sb">			
				<h4><p>商业合作/广告投放？</p></h4>
				《互联网金融》栏目是深圳财经生活频道2015年重磅打造的一档高端谈话类财经节目。力求为企业和投资人搭建成具有权威性、专业性和时效性等特点的互联网金融传播平台。收视人群广泛,教育程度较高,理财观念思想超前。
				
			</div>
			

		</div>

	</div>
	<script src="/git/Public/js/jquery.js"></script>
<style>
	.sb{

	}
	.sb:hover{
		border-width:0px 0px 0px 2px;
		border-color:red;
		border-style:solid;
		opacity:0.9;
		transition: opacity 0.5s;
		-webkit-transition:opacity 0.5s;
		padding-left:15px;
	}
	.classicon{
		width:100%;
		height:100%;
		position:absolute;
		left:0;
		top:0;
		color:#fff;
		opacity:0;
	}
	.classicon:hover{
		border-width:1px 1px 1px 1px;
		border-color:red;
		border-style:solid;
		opacity:0.9;
		transition: opacity 0.5s;
		-webkit-transition:opacity 0.5s;
	}

</style>


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