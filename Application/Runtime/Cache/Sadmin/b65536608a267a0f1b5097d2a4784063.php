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
	<link href="/git/Public/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="/git/Public/js/jquery.js"></script>
	<script>
		$(function(){
			$("button").click(function(){
				$.ajax({
					url:"/git/index.php/Sadmin/index/demo",
					type:"POST",
					data:{email:$("#email").val(),pwd:$("#pwd").val()},
					success:function(data){
						if(data.status == 0){
							$("#sv").text("登录成功,即将跳转");
						}else{
							$("#sv").append(data.info);
							
											
						}
					},
					error:function(){
						alert("致命错误");
					}
				})
			})
		})
	</script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				
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

    <fieldset>
      <div class="">
        <label class="control-label" >登录</label><p class="help-block" id="sv"></p>
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
            <button class="btn btn-default">登录</button>
          </div>
        </div>

    </fieldset>

		</div>
		<div class="span4">
		</div>
	</div>
</div>
  <script src="/git/Public/js/bootstrap.min.js"></script>
</body>
</html>