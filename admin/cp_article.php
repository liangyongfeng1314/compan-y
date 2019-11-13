<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/cp_article.css"/>
</head>

<body>
<?php
header( 'Content-Type:text/html;charset=utf-8 ');  
$link = @mysqli_connect("localhost","root","123456","itcast_ttc") or exit("连接失败!");
$sql = "select * from ttc_article";
$result = mysqli_query($link,$sql);

mysqli_query($link,'set names utf8');

?>
<body>
<div class="title">
	文章管理
</div>
<div class="box">
<div class="box-body">
	<table align="center" border="1" cellpadding="0" cellspacing="0">
		<tr>
        <th width="80">编号</th>
        <th>文章标题</th>
        <th width="120">作者</th>
        <th width="100">封面图</th>
        <td width="150">时间</td>
        <th width="100">关键字</th>
        <th width="100">操作</th>
        </tr>
		<?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['title']?></td>
				<td><?=$row['author']?></td>
				<td><?=$row['thumb']?></td>
				<td><?=$row['time']?></td>
                <td><?=$row['keywords']?></td>
				<td class="s-act">
                	<a href="cp_article_edit.php?id=<?=$row['id']?>">编辑</a>
                	<a href="cp_article_del.php?id=<?=$row['id']?>">删除</a>
                </td>
			</tr>
		<?php } ?>
	</table>
	
</body>
</html>