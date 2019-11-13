<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$id = 1;
if(isset($_GET['id'])){
	$id=$_GET['id'];	
	}

$link2=@mysqli_connect('localhost:3306','root','123456','itcast_ttc') or exit("连接数据库失败");

	
$sql1='select * from ttc_article  where id='.$id; 
		
mysqli_query($link2, 'set names utf8'); 	//设置字符集（SQL语句方式）
//执行SQL语句，并获取结果集
$result1 = mysqli_query($link2,$sql1);


?>
</body>
</html>