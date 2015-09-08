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
				
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <fieldset>
      <div id="legend" class="">
        <legend class="">提取地址</legend><small>800X600</small>

       </div>
    </fieldset>

    <div class="control-group">
      <div class="controls">
        <input type="file" placeholder="" class="input-xlarge" name="img" >
      </div>
    </div>

    

       <div class="control-group">
          <label class="control-label">Button</label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">Button</button>
          </div>
     </div>


  </form>

  <div class="row">
  
    <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><div class="col-md-4 col-sm-6" style="width:23.3333333333%">
        <p><?php echo ($v["id"]); ?></p>
        <img class="img-responsive img-portfolio img-hover" src="/git/Public/images/<?php echo ($v["img"]); ?>" ale="">
    <a href="#">修改</a><a href="<?php echo U('salon/del',array('id'=>$v['id']));?>">/删除</a>
    </div><?php endforeach; endif; ?>
    
  </div>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>