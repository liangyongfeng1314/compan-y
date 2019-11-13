<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/original.css">
<title>旅游资讯</title>
<?php include 'hot_article.php'?>
<?php include 'ori_article.php'?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/my_script.js"></script>
</head>

<body>
<!--导航栏-->
<div id="banner">
	<div class="logo">
		<img src="images/logo.png"/>
    	<img src="images/logo_title.png"/>
    </div>
    <div class="bar">
    </div>
</div>
 <!--中部区域--->
<div class="middle">
    <!--旅游资讯-->

    <div id="content">
        <div class="left">
        	<!--旅游资讯-->
           
		 <?php 	while($row2 = mysqli_fetch_array($result1)){?>
			<?php
				echo "<div class='information'>";
					echo "<div class='title'>";
					/*信息-标题*/	
						echo "<div class='art_title'>";
							echo "标题: ".$row2['title'];
						echo "</div>";
						echo "<div class='inf_auther_and_time'>";
							echo "作者: ".$row2['author']."|";
							echo "&nbsp;发表于 :".$row2['time'];
						echo "</div>";
					echo "</div>";
					echo "<div class='original_art'>";
						echo $row2['content'];
					echo "</div>";
				echo "</div>";
			?> 
         <?php }?>
				
        </div>

        <!--热门资讯-->
        <div class="hot_articles">
        		<p class="hot_p">Top 10热门资讯</p>
            	<?php
					while($rows3 = mysqli_fetch_array($result,MYSQLI_ASSOC)){
						echo "<div class='hot'>";
						
						echo "<a href='original.php?id=".$rows3['id']."' class='hot_a'>";
						
						echo $rows3['id']."、";
						if($rows3['title']){
							$str = $rows3['title'];
							if(strlen($rows3['title'])>20){
								$str = mb_substr($rows3['title'],0,15,'utf8').'....';
								echo $str;
							}else{
								echo $str;
							}
						}
						echo "</a>";
						echo "<br/>";
						echo "</div>";
						}
				?>
           
        </div>

    </div>
   
	</div>
</div>
<div class="buttom">
    	青旅有限公司   本系统为作者练习
</div>

</body>
</html>