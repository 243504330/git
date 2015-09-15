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
				
				
				
<div class="span9">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>标题</th>
			
				<th>首页操作</th>
				<th>详情页操作</th>
				<th>相关图片操作</th>
			</tr>
		</thead>
		<tbody id="tr">
	
		</tbody>
	</table>
</div>
<script src="/git/Public/js/jquery.js"></script>
<script>
    var p_url="/git";
	$(function(){
		$.ajax({
			url: "../Salon/index_data",
			type:"POST",
			success:function(data){
				if(data.status == 0){
					var data = data.data;
					var url = p_url+"/index.php/Sadmin/";
					$.each(data,function(i,obj){
						$("#tr").append(
							"<tr><class=''>"+
							"<td>"+obj.id+"</td>"+
							"<td>"+obj.title+"</td>"+
							"<td><a href='"+url+"salon/edite_data/id/"+obj.id+"'>编辑/</a><a href='#'>删除</a></td>"+
							"<td><a href='"+url+"salon/details_data/id/"+obj.id+"'>编辑/</a><a href='#'>删除</a></td>"+
							"<td><a href='"+url+"img/add_img/id/"+obj.id+"'>增加/</a><a href='"+url+"img/index/id/"+obj.id+"'>编辑</a></td>"+
							"</tr>"
						)
					})
				}
			}
		})
	})
</script>

				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>