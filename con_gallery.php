<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$link2=@mysqli_connect('localhost:3306','root','123456','itcast_ttc') or exit("数据库连接失败!");

$sql2 = 'select * from ttc_pictures';
		
mysqli_query($link2, 'set names utf8'); 	//设置字符集（SQL语句方式

$result2 = mysqli_query($link2,$sql2);





?>
	
</body>
</html>