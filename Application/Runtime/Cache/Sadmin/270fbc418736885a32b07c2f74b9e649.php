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
				

<div class="row" id="details">
	


</div>
<script src="/git/Public/js/jquery.js"></script>
<script>
	$(function(){
		var sid = "<?php echo ($_GET['id']); ?>";
		$.ajax({
			url:"/git/index.php/Sadmin/img/imgs/id/"+sid,
			type:"GET",
			success:function(data){		
					for(var o in data){
						var id = data[o].id;
						var img = data[o].img;
						var url = "/git/index.php/Sadmin/salon/del/id/"+id;
						$("#details").append(
							"<div class='col-md-4 col-sm-6' style='width:23.33333333333%'>" + 
							"<p>" + id + "</p>"+
							"<img class='img-responsive img-portfolio img-hover' src='/git/Public/images/" + img +"'ale=''>" +
							"<a href='#'>修改</a><a href='"+url+"'>/删除</a>" +
							"</div>"
						);
					}
				
			},
			error:function(){
				alert("致命错误");
			}
		});
	});
</script>

				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>