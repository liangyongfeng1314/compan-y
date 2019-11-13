<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台登录 - 青旅管理系统</title>
<link rel="stylesheet" href="./css/dashicons.css">
<link rel="stylesheet" href="./css/layout.css">
<script src="./js/jquery.min.js"></script>
<script>
if(top.location !== self.location){ 
	top.location = self.location; 
}

</script>

</head>
<body>
<div class="top">
<div class="top-title icon-home">青旅有限公司</div>
<div class="top-right">
	<a href="../" target="_blank">前台首页</a>
</div>
</div>
<div class="login">
<div class="login-wrap">
	<a href="../index.php" target="_blank" class="login-logo" title="点击查看前台首页"></a>
	
	<div class="login-box">
		<form method="post" action="panduan.php">
		<table>
			<tr><th>用户名：</th><td><input type="text" name="name" value="<?php  ?>"></td></tr>
			<tr><th>密　码：</th><td><input type="password" name="password"></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha"></td></tr>
			<tr><th></th><td><img src="./captcha.php" id="captcha" alt="验证码" title="点击刷新验证码"></td></tr>
			<tr><th></th><td><input type="submit" value="登录"></td></tr>
		</table>
		</form>
	</div>
</div>
</div>
<script>
//验证码点击刷新
(function(){
	var $img = $("#captcha");
	var src = $img.attr("src")+"?_=";
	$img.click(function(){
		$img.attr("src",src+Math.random()); //添加随机数防止浏览器缓存图片
	});
})();
</script>
</body>
</html>