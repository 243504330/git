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
				
				
				
<div class="row" id="details">
	


</div>
<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Application/Sadmin/js/controller.js"></script>
<script>
	var p_url = "/git";
	var sid = "<?php echo ($_GET['id']); ?>";
	$(function(){	
		$.ajax({
			url:"../../imgs/id/"+sid,
			type:"GET",
			success:function(data){		
				for(var i in data){
						var id = data[i].id;
						var img = data[i].img;
						var url = p_url+"/index.php/Sadmin/img/del_img/id/"+id;
						$("#details").append(
							"<div class='col-md-4 col-sm-6' style='width:23.33333333333%'>" + 
							"<p>" + id + "</p>"+
							"<img class='img-responsive img-portfolio img-hover' src='"+p_url+"/public/images/" + img +"'ale=''>" +
							"<a href='#'>修改</a><a href='javascript:void(0)' class='a_del' onclick='dele(this)' id='"+id+"'>/删除</a>" +
							"</div>"
						);	
				}	
	
			},
			error:function(){
				alert("致命错误")
			}
		});
	});
</script>

<script>
	function dele(obj){
		var id = $(obj).attr('id');
		$.ajax({
			type:"POST",
			url:"/git/index.php/Sadmin/img/del_img/id/"+id,
			dataType:"json",
			success:function(data){
				if(data.status === 0){
					alert(data.info);
				}else{
					alert(data.status);
				}
			},
			error:function(){
				alert('致命错误');
			}
		})
	}
</script>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>