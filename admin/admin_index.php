<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台 -青旅有限公司</title>
<link rel="stylesheet" href="./css/dashicons.css">
<link rel="stylesheet" href="./css/layout.css">
<script src="./js/jquery.min.js"></script>
</head>
<body>
<?php session_start();?>
<!-- 顶部导航 -->
<div class="top">
	<div class="top-title icon-home">青旅有限公司</div>
	<div class="top-right">
		<a href="#">您好，<?php echo $_SESSION["name"];?></a><a href="../index.php" target="_blank">前台首页</a><a href="login.php">退出</a>
	</div>
</div>
<!-- 主要区域 -->
<div class="main">
<!-- 左侧导航 -->
<div class="nav">
	<div class="photo icon-admin"></div>
	<a target="panel" href="./cp_index.php" class="jq-nav icon-index curr">主页</a>
	<a target="panel" href="./article_add.php" class="jq-nav icon-add">资讯文章发布</a>
	<a target="panel" href="./cp_article.php" class="jq-nav icon-article">资讯文章管理</a>
    <a target="panel" href="./lib_man.php" class="jq-nav icon-article">图库管理</a>
	<script>
		//单击链接，按钮高亮
		$(".jq-nav").click(function(){
			$(this).addClass("curr").siblings().removeClass("curr");
		});
	</script>
</div>
<!-- 内容区域 -->
<div class="content">
	<iframe src="./cp_index.php" frameborder="no" name="panel"></iframe>
</div>
</div>
</body>
</html>