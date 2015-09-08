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
		<tbody>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="warning">
				
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["title"]); ?></td>
				
				<td><a href="<?php echo U('salon/edite',array('id'=>$v['id']));?>">编辑</a>/<a href="#">删除</a></td>
				<td><a href="<?php echo U('salon/details',array('id'=>$v['id']));?>">编辑</a>/<a href="#">删除</a></td>
				<td><a href="<?php echo U('img/index',array('id'=>$v['id']));?>">增加</a>/<a href="<?php echo U('salon/simg',array('id'=>$v['id']));?>">编辑</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>				
		</tbody>
	</table>
</div>

				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>