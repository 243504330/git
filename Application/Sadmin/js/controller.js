
function details(sid,p_url){
	$(function(){	
		$.ajax({
			url:"../../imgs/id/"+sid,
			type:"GET",
			success:function(data){		
				
			},
			error:function(){
				alert("致命错误");
			}
		});
	});
}


function login(){
	$(function(){
		$("#put").click(function(){
			$.ajax({
				url:"/git/index.php/Sadmin/index/demo",
				type:"POST",
				data:{email:$("#email").val(),pwd:$("#pwd").val()},
				success:function(data){
					if(data.status == 0){
						window.location.href = "../user/index";
					}else{
						alert(data.status);
						alert(data.info);
					}
				},
				error:function(){
					alert("致命错误");
				}
			})
		})
	})
}