<?php
//首先是验证用户名是否正确，验证码正确，进行用户名验证，如果用户名正确，进行密码验证，密码正确，跳到管理界面
header("Content-type:text/html;charset=utf-8");
session_start();

$_SESSION["name"]=$_POST['name'];

if(strnatcasecmp($_SESSION["code"],$_POST["captcha"])==0)

{

$name=$_POST["name"];
$link= @mysqli_connect('localhost','root','123456','itcast_ttc') or exit("连接数据库失败!");
$sql = "select * from ttc_admin where name = '".$name. "'";

$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($name == $row["name"]){


$password = md5(md5($_POST["password"]).$row["salt"]);

if($password == $row["password"])
{
	echo "
			<script>
				alert('密码正确，即将进入管理界面!');
				window.location.href='admin_index.php';
			
			</script>
	
		";

}else{
	
	echo "<script>
			alert('密码错误!');
				window.location.href='login.php';
		</script>";
	
	}	
}else{
		
		echo "<script>
	
		alert('用户名错误!')
	
		parent.location.href = 'login.php';
	
		</script>";
		
		}

}else{
	echo "<script>
	
	alert('验证码错误!')
	
	parent.location.href = 'login.php';
	
	</script>";
	
	
	}
?>