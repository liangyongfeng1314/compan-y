<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
header("content:text/html;charset=utf-8");
//连接数据库
$link = @mysqli_connect('localhost:3306','root','123456','itcast_ttc') or die("数据库连接失败!");
mysqli_query($link,'set names utf8');

//默认当前页为1
$currentPage = 1;
//上一页按钮的设置
//获取page后进行赋值为当前页
if(isset($_GET['page'])){
	$currentPage = $_GET['page'];
	}
//计算总条目数
$sql = "select count(*) as count from ttc_article";

$result = mysqli_query($link,$sql);

$row = mysqli_fetch_array($result);
//总条目数
$pageCounts = $row['count'];
//每页的显示条目数
$pageSize = 2;
//根据总条目数计算一共有多少页
$pages = ceil($pageCounts/$pageSize);
$prePage = $currentPage - 1;
//上一页不能减到负数
if($prePage <= 0){
	$prePage = 1;
	}
//翻页-下一页按钮的设置
$nextPage = $currentPage+1;

//下一页不能一直加
if($nextPage >= $pages){
$nextPage = $pages;
}
//显示限制每页的数量出来
//开始页
$start = ($currentPage - 1)*$pageSize;

$sql1 = "select * from ttc_article limit $start,$pageSize";

$result1 = mysqli_query($link,$sql1);

mysqli_close($link);
?>
</body>
</html>