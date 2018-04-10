<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="jquery-1.8.3.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<!-- <li class="active"><a href="index.html">Style 1</a></li>
						<li><a href="index2.html">Style 2</a></li>
						<li><a href="index3.html">Style 3</a></li> -->
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<!-- Start Sign In Form -->
					<form action="reg_do.php" class="fh5co-form animate-box" data-animate-effect="fadeIn" method="post">
						<h2>注册</h2>
						<!-- <div class="form-group">
							<div class="alert alert-success" role="alert">Your info has been saved.</div>
						</div> -->
						<div class="form-group">
							<label for="name" class="sr-only">用户名</label>
							<input type="text" class="form-control" id="name" placeholder="用户名" autocomplete="off" name="name">
							<span class="s_name"></span>
						</div>
						<!-- <div class="form-group">
							<label for="email" class="sr-only">邮箱</label>
							<input type="email" class="form-control" id="email" placeholder="邮箱" autocomplete="off" name="email">
						</div> -->
						<div class="form-group">
							<label for="password" class="sr-only">密码</label>
							<input type="password" class="form-control" id="password" placeholder="密码" autocomplete="off" name="pwd">
							<span class="s_pwd"></span>
						</div>
						<!-- <div class="form-group">
							<label for="re-password" class="sr-only">Re-type Password</label>
							<input type="password" class="form-control" id="re-password" placeholder="Re-type Password" autocomplete="off">
						</div> -->
						<!-- <div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div> -->
						<div class="form-group">
							<p>已有账号？请<a href="login.php">登录</a></p>
						</div>
						<div class="form-group">
							<input type="submit" value="注册" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>
		</div>
	</body>
</html>
<script>
$(function(){
	$(".form-control").blur(function(){
		var name=$(this).val();
		if(name){
			if(name.length>30){
				$(".s_name").html("<font color='red'>用户名最长为20位</font>");return false;
			}else{
				$.ajax({
					type:'get',
					url:"unique_name.php",
					data:{name:name},
					dataType:"json",
					success:function(msg){
						if(msg.msg==1){
							$(".s_name").html("<font color='red'>用户名已存在请更换个用户名</font>");return false;
						}else{
							$(".s_name").html("<font color='green'>√</font>");return false;
						}
					}
				})
			}
		}else{
			$(".s_name").html("<font color='red'>用户名不能为空</font>");return false;
		}
	})
	$("#password").blur(function(){
		var pwd=$(this).val();
		if(pwd){
			$(".s_pwd").html("<font color='green'>√</font>");return false;
		}else{
			$(".s_pwd").html("<font color='red'>密码不能为空</font>");return false;
		}
	})
})
</script>
