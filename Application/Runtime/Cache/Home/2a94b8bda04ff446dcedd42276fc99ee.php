<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
 <head>
 	<title>测试练习WEB</title>
 	<script type="text/javascript" src="/Public/js/jquery.js"></script>
 	<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap-theme.min.css">
 	<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css">
 	<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
 	<!-- <script type="text/javascript" src="/Public/bootstrap/js/npm.js"></script> -->

 </head>
 <script type="text/javascript" src="/Public/unslider/js/unslider-min.js"></script>
 <link rel="stylesheet" type="text/css" href="/Public/unslider/css/unslider.css">
 <link rel="stylesheet" type="text/css" href="/Public/unslider/css/unslider-dots.css">
 <style type="text/css">
	.banner { position: relative; overflow: auto; }
    .banner li { list-style: none; }
    .banner ul li { float: left; width: 100%;}
    .banner ul li img {width: 100%}
 </style>
 <body style="height: 10000px">
 		<!--头部导航-->
 		<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 1px;" >
	 		<div class="container">
	 			<div class="navbar-header">
	 				<a class="navbar-brand">首页</a>
	 			</div>
	 			<div>
	 				<ul class="nav navbar-nav">
	 					<li class="active"><a href="">导航a</a></li>
	 					<li><a href="">导航a</a></li>
	 					<li><a href="">导航a</a></li>
	 					
	 				</ul>
	 			</div>
 			</div>
 		</nav>
 		<!--头部导航end-->
 		<!--轮播-->
 		<div class="">
	 		<div class="banner">
	 			<ul>
	 				
	 				<li><a href=""><img src="/Public/images/1.jpg"></a></li>
	 				<li><a href=""><img src="/Public/images/2.jpg"></a></li>
			       	<li><a href=""><img src="/Public/images/3.jpg"></a></li>
	 			</ul>

	 		</div>
	 		
	 	</div>
 		<!--轮播end-->
 	
 </body>
 <script type="text/javascript">
 	$(function() {
   		var unslider = $('.banner').unslider({
			speed: 500,               //  每个幻灯片的动画速度(毫秒单位)
			delay: 30000,              //  幻灯片切换  毫秒单位
			complete: function() {},  //  A function that gets called after every slide animation
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: true,               //  Display dot navigation
			fluid: false,              //  Support responsive design. May break non-responsive designs
			autoplay:true,
			arrows: false,
			easing: 'linear',			//swing  linear 2中形式
  		
		});

		$('.unslider-arrow').click(function() {
        var fn = this.className.split(' ')[1];

        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
    });
	});
 </script>
 </html>