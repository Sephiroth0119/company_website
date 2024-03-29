<html>
<style type="text/css">
       
        #banner {
            width: 100%;
            height: 700px;
            margin: 0px auto;
            position: relative; /*相对定位,相对于.btn按钮*/
            text-align: left;
        }
        .pic image {
            display: block; /*默认有图片不显示*/
            position: absolute; /*绝对定位.对应的是.pic这个div*/
            top: 0px;
            left: 0px;
        }
        .pic a {
            display: none;
        }
        .pic { /*专门显现图片区*/
            position: relative; /*相对定位.对应.pic img*/
          
        }
        .btn {
            width: 150px;
            height: 18px;
            position: absolute; /*绝对定位相对于banner div*/
            bottom: 5px;
        right: 700px;
        }
            .btn ul li {
                background-color: #000000; /*黑色*/
                color: #ffffff;
                list-style-type: none;
                width: 18px;
                height: 18px;
                float: left;
                border-radius: 9px; /*变成圆的*/
                text-align: center;
                line-height: 18px;
                cursor: pointer; /*鼠标移动变手指状态*/
                margin-left: 5px;
            }
                .btn ul li.one {
                   
                    background-color: #ff9966;
                }
    </style>
<head>
  	<title>Home</title>
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
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Poppins:100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>

<header>
		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<a class="navbar-brand" href="index.php">
				 <img src="/XZ-公司网站-TXT-190412.files/image001.png"></img></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto tp-nav">
						<li class="nav-item active">
							<a class="nav-link" href="/index.php">网站首页
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="/company-introduction/index.php">关于攀星</a>
						</li>
						<li class="nav-item">
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

 

<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Best Creative Agency for your needs</h3>
						<div class="bnr-button">
						
						</div>

					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
							
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Best Creative Agency for your needs</h3>

						<div class="bnr-button">
					
						
						</div>

					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
						
							</button>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>



	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Unlimited Features</h3>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-lg-4 grid_info_main" data-aos="flip-left">
					<div class="grid_info">
						<div class="icon_info">
							<span class="icon">
								<i class="fas fa-laptop"></i>
							</span>
							<h5>Fully Responsive</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
							<span class="icon">
								<i class="far fa-clone"></i>
							</span>
							<h5>Layered PSD Files</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
					<img src="/XZ-公司网站-TXT-190412.files/image001.png" class="img-responsive" alt=" " style="padding-top:200px">
				</div>
				<div class="col-lg-4 grid_info_main" data-aos="flip-right">
					<div class="grid_info">
						<div class="icon_info">
							<span class="icon">
								<i class="fas fa-sitemap"></i>
							</span>
							<h5>Site Builder</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
							<span class="icon">
								<i class="fab fa-android"></i>
							</span>
							<h5>Animation</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>


<?php
require('./footer.php');
?>
</body>
<script type="text/jscript" src="./js/jquery-2.2.3.min.js"></script>
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
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
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
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>

