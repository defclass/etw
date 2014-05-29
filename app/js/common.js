// JavaScript Document
$(document).ready(function(){
	//language 效果
	$(".language").hover(function(){
		  		$(this).children(".l_box").css("display","block");
		  	}, function() {
				$(this).children(".l_box").css("display","none");
			});
	// nav 效果
	$(".nav ul .nav_li").hover(function(){
		  		$(this).children("div").css("display","block");
		  		$(this).children(".nav_width").css("background","#fff");
		  		$(this).children(".nav_width").css("color","#555");
		  	}, function() {
				$(this).children("div").css("display","none");
				$(this).children(".nav_width").css("background","none");
				$(this).children(".nav_width").css("color","#fff");
			});

	

		
})