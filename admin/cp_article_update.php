<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
header("Content-type:text/html;charset=utf-8");
//判断文件上传到临时目录是否会出错，如果出错则输出错误信息并退出
$destination = null;

				if ($_FILES['userfile']['error'] > 0){
					$error_msg = '上传错误:';
					switch ($_FILES['userfile']['error']) {
					case 1:
						$error_msg .= "文件大小超出了php.ini中upload_max_filesize的值";
					break;
					case 2:
						$error_msg .= "文件的大小超出了表单中max_file_size选项指定的值";
						break;
					case 3:
						$error_msg .= "文件只有部分被上传";
						break;
					case 4:
						$error_msg .= "没有文件被上传";
						break;
					case 6:
						$error_msg .= "找不到临时文件夹";
						break;
					case 7:
						$error_msg .= "文件写入失败";
						break;
					default:
						$error_msg .= "未知错误";
						break;
			}
		}
	//文件没有上传弹出提示，但是填入的信息可以继续存入到系统里面
			if(isset($error_msg)){
				echo "<script>
						alert('$error_msg');		
					</script>";
			}else{
				//上传到临时目录成功,将其复制到脚本文件所在的uploads文件夹中
				$destination = '../images/'. $_FILES['userfile']['name']; //目标文件
			}	
	

$id =  $_GET['id'];
$article_name = $_POST['article_name'];
$author =  $_POST['author'];;
$content =  $_POST['content'];
$keywords = $_POST['keywords'];
$link = @mysqli_connect("localhost","root","123456","itcast_ttc") or exit("数据库连接失败!");

$sql = "update ttc_article set title ='$article_name',author = '$$author',thumb = '$destination',content =  '$content',keywords = '$keywords'  where id = $id";

$result = mysqli_query($link,$sql);

if($result){
	echo "<script>
		alert('数据修改成功!');
		window.location.href='cp_article.php';
	</script>>";
	
	}else{
		echo "<script>
				alert('数据修改失败!');
				window.location.href='cp_article.php';
			</script>>";
		}
 ?>
</body>
</html>