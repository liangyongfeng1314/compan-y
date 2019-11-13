<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>前台-青旅有限公司</title>
<link type="text/css" rel="stylesheet" href="css/index.css"/>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/my_script.js"></script>
<?php include 'information.php';?>
<?php include 'hot_article.php'?>
<style>
@charset "utf-8";
/* CSS Document */

li {
		list-style: none;
	}
	.solid {	
		width: 1200px;
		height: 360px;
		margin: 20px auto 0;
		box-shadow: 1px 7px 25px #79EEE2;
	}
	.solid ul {
		height: 100%;
	}
	.solid ul li {
		position: relative;
		float: left;
		box-sizing: border-box;
		transform-style: preserve-3d;
		transform: translateZ(-180px);
	}
	.solid ul li div {
		position: absolute;
		width: 100%;
		height: 100%;
	}
	.solid ul li div:nth-child(1) {
		top: -360px;
		background: url('./images/carousel_two.jpg');
		transform-origin: bottom;
		transform: translateZ(180px) rotateX(90deg);
	}
	.solid ul li div:nth-child(2) {
		top: 360px;
		background: url('./images/carousel_one.jpg');
		transform-origin: top;
		transform: translateZ(180px) rotateX(-90deg);
	}
	.solid ul li div:nth-child(3) {
		background: url('./images/carousel_three.jpg');
		transform: translateZ(180px);
	}
	.solid ul li div:nth-child(4) {
		background: url('./images/carousel_four.jpg');
		transform: translateZ(-180px) rotateX(180deg);
	}
	.solid ol {
		position: absolute;
		left: 50%;
		width: 140px;
		height: 20px;
		transform: translateX(-50%);
		display: flex;
		justify-content: space-around;
	}
	.solid ol li {
		width: 20px;
		height: 20px;
		background: black;
		box-shadow: 0 2px 5px white;
		border-radius: 50%;
		color: white;
		text-align: center;
		/*斜体 12px大小/20px行高*/
		font: italic 12px/20px 'Microsoft Yahei';
		cursor: pointer;
	}
	.solid ol li.on {
		background: red;
	}
</style>
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
    <!--轮播图-->
<div id="middle">
    <div class="solid">
        <ul class="oUl"></ul>
            <ol>
                <li class="on">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ol>
    </div>
    <script src="js/demo.js"></script>

    <!--旅游资讯-->
    <div id="content">
        <div class="left">
        	<!--旅游资讯-->
            <?php 
				while($rows = mysqli_fetch_array($result1)){
					echo "<div class='information'>";
						/*信息-标题*/	
						echo "<div class='art_title'>";
							echo "标题: ".$rows['title'];
						echo "</div>";
						/*信息-关键词*/
						echo "<div class='keyWords'>";
							echo "关键字:".$rows['keywords'];
						echo "</div>";
						/*信息-图片*/
						echo "<div class='inf_p'>";
						?>
                        <?php if($rows['thumb']){ ?>
							<img src="images/<?=$rows['thumb']?>"/>		
                         <?php }?>
                        
				<?php 			
						echo "</div>";
						/*作者，发表时间*/
						echo "<div class='inf_message'>";
						echo "<div class='inf_auther_and_time'>";
							echo "作者: ".$rows['author']."|";
							echo "&nbsp;发表于 :".$rows['time'];
						echo "</div>";
						/*查看原文*/
								echo "<a href='original.php?id=".$rows['id']."' class='original'>";
						
									echo "查看原文>>";
                        
						echo "</a>";
						echo "</div>";
						echo "</div>";	
				}?>
                <?php echo "<div class='btn_group'>"?>
               		 <a href="<?php echo 'index.php'.'?page='.'1';?>" onclick="return false" id="aclick" class="btn">首页</a>
               
				  
                	<a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$prePage;?>" class="btn">上一页</a>
               
                
                	<a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$nextPage;?>" class="btn">下一页</a>
                
				
                	<a href="<?php echo 'index.php'.'?page='.$pages;?>" id="endclick" class="btn" >尾页</a>
                	
       		<?php echo "</div>"?>
      		<?php 
				//$page为当前页,当$page为1,首页按钮点击无效
					$page = 1;
				if(isset($_GET['page'])){
					$page =  $_GET['page'];
					}
					
				if($page == 1){
			?>
            	<script>
                	 document.getElementById("aclick").onclick = function(){
            			return false;
      				  }
                </script>	
			<?php }else{?>
            	<script>
                	 document.getElementById("aclick").onclick = function(){
            			return true;
      				  }
                </script>	
            <?php }?>
            <!--当达到尾页按钮不能点击-->
            <?php if($page == $pages){ ?>
				 	<script>
                    	 document.getElementById("endclick").onclick = function(){
            			return false;
      				  }
                    </script>
			<?php	}?>
				
        </div>
        <!--中部导航栏-->
        <div class="banner_right">
        	<p class="banner_p">内容栏目</p>
            <a href="original.php" class="banner_a">旅游资讯</a>
            <a href="attractions_gallery.php" class="banner_a">景点图库</a>
            <a href="loose_pulley.php" class="banner_a">邮轮</a>
            <a href="hotel.php" class="banner_a">酒店</a>
            <a href="connection.php" class="banner_a">联系我们</a>
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
<div class="buttom">
    	青旅有限公司   本系统为作者练习
</div>

</body>
</html>
