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
				
				
				
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
    <fieldset>
      <div id="legend" class="">
        <legend class="">表单名<?php echo ($data["id"]); ?></legend>
      </div>
    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">嘉宾</label>
          <div class="controls">
            <div class="textarea">
              <textarea placeholder="" type="" class="" name="compere"><?php echo ($data["compere"]); ?></textarea>
            </div>
            <p class="help-block"></p>
          </div>
        </div>

    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">企业</label>
          <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge" name="title" value="<?php echo ($data["title"]); ?>">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">嘉宾</label>
          <div class="controls">
            <div class="textarea">
                  <textarea placeholder="<?php echo ($data["guest"]); ?>" type="" class="" name="guest"><?php echo ($data["guest"]); ?> </textarea>
            </div>
          </div>
     </div>

    

    <div class="control-group">
          <label class="control-label">图片上传</label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="fileInput" type="file" name="img">
          </div>
    </div>



 
 
    <div class="control-group">
          <label class="control-label">Button</label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">Button</button>
          </div>
     </div>

    

    </fieldset>
  </form>
				
			</div>
		</div>
	</div>
</div>



<script src="/git/Public/js/jquery.js"></script>
<script src="/git/Public/js/bootstrap.min.js"></script>



</body>
</html>