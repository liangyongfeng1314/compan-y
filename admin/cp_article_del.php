<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$id = $_GET['id'];
$link = @mysqli_connect("localhost","root","123456","itcast_ttc") or exit("数据库连接失败!");

$sql = "delete from ttc_article  where id = $id";

$result = mysqli_query($link,$sql);
if($result){
	echo "
			<script>
				alert('数据删除成功!');
				window.location.href='cp_article.php';
			</script>
	
		";
	}else{
		echo "删除失败!";
		}
?>
</body>
</html>