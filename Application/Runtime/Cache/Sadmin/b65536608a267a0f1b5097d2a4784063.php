<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>登录</title>
	<link href="/git/git/Public/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="/git/git/Public/js/jquery.js"></script>
	<script src="/git/git/Public/js/jquery.validate.js"></script>
	<script src="/git/git/Public/js/jquery-form.js"></script>
	<!--<script>
		$(function(){
			$("#put").click(function(){
				$.ajax({
					url:"/git/git/index.php/Sadmin/index/demo",
					type:"POST",
					data:{email:$("#email").val(),pwd:$("#pwd").val()}
					success:function(data){
						if(data.status == 0){
							alert("success");
						}else{
							alert("error");
							
											
						}
					},
					error:function(){
						document.write("332");
				})
			})
		})
	</script>-->
	<script>
		$(function(){
			$("#put").click(function(){
				$.ajax({
					url:"/git/git/index.php/Sadmin/index/demo",
					type:"POST",
					data:{email:$("#email").val(),pwd:$("#pwd").val()},
					success:function(data){
						if(data.status == 0){
							alert(data.status);
						}else{
							alert(data.status);
						}
					},
					error:function(){
						alert("致命错误");
					}
				})
			})
		})
	</script>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4" style="margin-top:10%">
		</div>
		<div class="span4" style="margin-left:40%">
			<p class="help-block" id="sv"></p>
	<form id="form1" method="POST">
    <fieldset>
      <div class="">
        <label class="control-label" >登录</label>
      </div>
    
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01" >帐号</label>
          <div class="controls">
            <input type="text" placeholder="" name="email" id="email"  class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01" >密码</label>
          <div class="controls">
            <input type="password" placeholder="" class="input-xlarge" name="pwd"  id="pwd">
            
          </div>
        </div>

 
    <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <input type="submit" value="登陆" id="put">
          </div>
        </div>

    </fieldset>
</form>
		</div>
		<div class="span4">
		</div>
	</div>
</div>
  <script src="/git/git/Public/js/bootstrap.min.js"></script>
</body>
</html>