$(document).ready(function(){
	/*导航栏样式*/
	$(".bar").append("<a href='index.php'>首页</a>"); 
	$(".bar").append("<a href='original.php'>旅游资讯</a>"); 
	$(".bar").append("<a href='attractions_gallery.php'>景点图库</a>"); 
	$(".bar").append("<a href='loose_pulley.php'>邮轮</a>"); 
	$(".bar").append("<a href='hotel.php'>酒店</a>"); 
	$(".bar").append("<a href='connection.php'>联系我们</a>"); 
	$(".bar a").click(function(e){
	  	$(this).addClass("liner").siblings().removeClass("liner");
	});
	$(".bar a").hover(function(){
		$(this).addClass("line");
	},function(){
		$(this).removeClass("line");
	});
	//去除hot标签的样式
	$("hot").css();
});
