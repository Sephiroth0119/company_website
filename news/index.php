<html>

<head>
	<title>News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="/css/style.css" rel='stylesheet' type='text/css' />
	<link href="/css/team.css" rel='stylesheet' type='text/css' />
	<link href="/css/fontawesome-all.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Poppins:100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<style>
 * {
            margin: 0px;
            padding: 0px;
            
            text-align: center;
        }
        #wrapper {
            width: 100%;
	    font-size: 12px;
            margin: 0px auto;
            position: relative; /*相对定位,相对于.btn按钮*/
            text-align: left;
        }

}
</style>
<body>

<header>
		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<a class="navbar-brand" href="index.html">
				 <img src="/XZ-公司网站-TXT-190412.files/image001.png"></img></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto tp-nav">
						<li class="nav-item">
							<a class="nav-link" href="/index.php">网站首页
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="/company-introduction/index.php">关于攀星</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="/news/index.php">新闻动态</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								解决方案
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/products/index.php">产品中心</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/technology/index.php">技术方案</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/case/index.php">应用案例</a>
							</div>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/contact/index.php">联系我们</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/job/index.php">加入我们</a>
						</li>
					</ul>
				

				</div>
			</nav>
		</div>
	</header>

	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/index.php">网站首页</a>
		</li>
		<li class="breadcrumb-item active">新闻动态</li>
	</ol>
	<!--/model-->

  <div id="wrapper">
    <div style="width:100%;float:left">
<h2>新闻动态:</h2>
<ul>
    <li><a target="setpdf"  href="./pdf1.php"> 掌静脉生物识别系统专题报道，摘自苏州安防协会杂志-2018 第4期               — — 181201</a></li>
    <li><a target="setpdf"  href="./pdf2.php">苏州安防协会领导至我公司参观，摘自苏州安防协会杂志-2018 第4期              — — 181031</a></li>
    <li><a target="setpdf"  href="./pdf3.php">苏州安防协会和苏大体院退休党支部联袂开展党员一日活动，摘自苏州安防协会杂志-2018 第4期              — — 181031</a></li>
</ul>
      <h2>经典项目：</h2>
<ul>      
  <li>掌静脉生物识别入仪驻漕湖学校“校园盾牌”项目，这项创新工作，省委领导都“点赞”--181013</li>
  <li>苏州市安防新产品介绍，摘自：苏州安防协会杂志-2018第3期                     — —180901</li>
</ul>
    </div>
  </div>
<div>


</div>

<iframe id=setpdf name=setpdf frameborder=0 width=100% height=2000px></iframe>

</body>
<?php
require('../footer.php');
?>





<script type="text/jscript" src="/js/jquery-2.2.3.min.js"></script>
    <script type="text/jscript">
      $(function () {
          $("#all li").mouseover(function () {//鼠标进入离开事件
              $(this).css("background-color", "#ff00ff").siblings().css("background-color", "white");
              $(this).css({ "background-color": "red", "font-size": "9px" }).siblings().hide();
          });
          $(window).scroll(function () {//鼠标滚动事件
              var _top = $(window).scrollTop(); //获得鼠标滚动的距离
          });
          //手动播放图片
          $(".btn ul li").hover(function () {
              $(this).addClass("one").siblings().removeClass("one");
              index = $(this).index();
              i = index;
              $(".pic a").eq(index).stop().fadeIn(500).show().siblings().stop().fadeIn(500).hide();
          });
          //自动播放图片
          var i = 0;
          var t = setInterval(autoplay, 5000);
          function autoplay() {
              i++;
              if (i > 4) i = 0;
              $(".btn ul li").eq(i).addClass("one").siblings().removeClass("one");
              $(".pic a").eq(i).stop().fadeIn(500).show().siblings().stop().fadeIn(500).hide();
          }
          $("#banner").hover(function () {
              clearInterval(t);
          }, function () {
              t = setInterval(autoplay, 5000);
          });
      });
    </script>
<!-- js -->
	<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- simpleLightbox -->
	<script src="/js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- flexSlider -->
	<script defer src="/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	 
	  $(window).load(function(){
		$('.flexslider').flexslider({
		  animation: "slide",
		  start: function(slider){
			$('body').removeClass('loading');
		  }
		});
	  });
	</script>
  
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="/js/aosindex.js"></script>
	<!-- //js files -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="/js/move-top.js"></script>
	<script type="text/javascript" src="/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>

</html>
