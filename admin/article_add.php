<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/article_add.css"/>
</head>

<body>
<div class="title">文章发布</div>
<div class="content_add">
    <form id="form1" enctype = "multipart/form-data" name="form1" method="post" action="article_insert.php">
      <p>
        <label for="textfield">文章名称:</label>
        <input type="text" name="article_name" id="textfield">
      </p>
      <p>
        <label for="textfield2">作者&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" name="author" id="textfield2">
      </p>
      <p>
        <label for="textfield3">关键字&nbsp;&nbsp;:</label>
        <input type="text" name="keywords" id="textfield3">
      </p>
      <p>
      	<input type = "hidden" name = "max_file_size" value = "300000" />
    	上传图片: <input type = "file" name = "userfile" />
      </p>
      <p>
        <label for="textarea">文章描述:</label>
        <textarea name="content" id="textarea"></textarea>
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="发布">
      </p>
    </form>
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
</div>
</body>
</html>