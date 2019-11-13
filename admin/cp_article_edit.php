<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$id =  $_GET['id'];
$link = @mysqli_connect("localhost","root","123456","itcast_ttc") or exit("数据库连接失败!");

$sql = "select * from ttc_article where id = $id";

$result = mysqli_query($link,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>

<body>
<form action="cp_article_update.php?id=<?=$id?>" method="post" enctype="multipart/form-data"/>
  <p>
    <label for="name">文章标题</label>
    <input type="text" name="article_name" id="article_name"  value="<?=$row['title']?>"/>
  </p>
 <p>
    <label for="author">作者:</label>
    <input type="text" name="author" id="author"  value="<?=$row['author']?>"/>
  </p>
  <p>
  <input type = "hidden" name = "max_file_size" value = "300000" />
    <label for="file">封面图:</label>
    <input type="file" name="userfile" id="userfile"/>
  </p>
  <p>
    <label for="keywords">关键字</label>
    <input type="text" name="keywords" id="keywords"  value="<?=$row['keywords']?>"/>
  </p>
  <p>
     <label for="textarea">文章描述:</label>
     <textarea name="content" id="textarea"></textarea>
  </p>
  <input type="submit" name="submit" value="修改"/>
</form>
<?php mysqli_close($link)?>
    <script src="./js/ckeditor/ckeditor.js">
    </script>
    <script src="./js/jquery.min.js"></script>
    <script>
    $(function(){
        CKEDITOR.config.height=400;
        CKEDITOR.config.width="100%";
        CKEDITOR.replace("content");
        });
    </script>
</body>
</html>