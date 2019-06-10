<html>

<head>
  	<title>Contact</title>
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
	<link href="/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="/css/fontawesome-all.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Poppins:100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<style>
        html, body, #container {
            height: 100%;
            width: 100%;
        }

        .content-window-card {
            position: relative;
            box-shadow: none;
            bottom: 0;
            left: 0;
            width: auto;
            padding: 0;
        }

        .content-window-card p {
            height: 2rem;
        }

        .custom-info {
            border: solid 1px silver;
        }

        div.info-top {
            position: relative;
            background: none repeat scroll 0 0 #F9F9F9;
            border-bottom: 1px solid #CCC;
            border-radius: 5px 5px 0 0;
        }

        div.info-top div {
            display: inline-block;
            color: #333333;
            font-size: 14px;
            font-weight: bold;
            line-height: 31px;
            padding: 0 10px;
        }

        div.info-top img {
            position: absolute;
            top: 10px;
            right: 10px;
            transition-duration: 0.25s;
        }

        div.info-top img:hover {
            box-shadow: 0px 0px 5px #000;
        }

        div.info-middle {
            font-size: 12px;
            padding: 10px 6px;
            line-height: 20px;
        }

        div.info-bottom {
            height: 0px;
            width: 100%;
            clear: both;
            text-align: center;
        }

        div.info-bottom img {
            position: relative;
            z-index: 104;
        }

        span {
            margin-left: 5px;
            font-size: 11px;
        }

        .info-middle img {
            float: left;
            margin-right: 6px;
        }

        #content {
            width: 100%;
            height: 700px;
            margin: 0px auto;
            text-align: center;
        }
	#secondary_content{
	font-size:24px;
	}
        #wrapper{
        width:80%;
        height:600px;
        }
	#wrapper2{
            margin: 0px auto;
            text-align: center;
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
						<li class="nav-item active">
						  <a class="nav-link" href="/contact/index.php">联系我们</a>
						</li>
						<li class="nav-item ">
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
		<li class="breadcrumb-item active">联系我们</li>
	</ol>
	<!--/model-->
	<div id="content">

	  <div id="wrapper" style="margin:auto">
	  </div>
	  <br>
	  <div id="wrapper2">
	    <a>地址:常熟市高新技术产业开发区金都路8号</a><br>
	    <a>联系电话:0512-80639733</a><br>
	    <a>邮箱:info@pentastartech.com</a><br>
	  </div>
	</div>
</body>
<?php
require('../footer.php');
?>
</html>
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=dce03b14f925ca09c78c3e9a2f3f7d4e"></script> 
<script type="text/javascript">
  var map = new AMap.Map("wrapper", {
  resizeEnable: true,
  center: [120.789487, 31.603583],
  zoom: 16
  });
  addMarker();

        //添加marker标记
	function addMarker() {
	map.clearMap();
	var marker = new AMap.Marker({
        map: map,
        position: [120.789487, 31.603583]
	});
	//鼠标点击marker弹出自定义的信息窗体
	AMap.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker.getPosition());
	});
	}

        //实例化信息窗体
	var title = '常熟大学科技园<span style="font-size:11px;color:#F00;">苏州攀星光电科技有限公司</span>',
	content = [];
	content.push("<img src='../XZ-公司网站-TXT-190412.files/image001.png'>地址：常熟市高新技术产业开发区金都路8号");
	content.push("电话：0512-80639733");
	content.push("<a href='https://ditu.amap.com/search?query=%E5%B8%B8%E7%86%9F%E5%B8%82%E9%AB%98%E6%96%B0%E6%8A%80%E6%9C%AF%E4%BA%A7%E4%B8%9A%E5%BC%80%E5%8F%91%E5%8C%BA%E9%87%91%E9%83%BD%E8%B7%AF8%E5%8F%B7&city=110105'>详细信息</a>");
	var infoWindow = new AMap.InfoWindow({
	isCustom: true,  //使用自定义窗体
	content: createInfoWindow(title, content.join("<br/>")),
	offset: new AMap.Pixel(16, -45)
	});

	//构建自定义信息窗体
	function createInfoWindow(title, content) {
	var info = document.createElement("div");
	info.className = "custom-info input-card content-window-card";

	//可以通过下面的方式修改自定义窗体的宽高
	//info.style.width = "400px";
	// 定义顶部标题
	var top = document.createElement("div");
	var titleD = document.createElement("div");
	var closeX = document.createElement("img");
	top.className = "info-top";
	titleD.innerHTML = title;
	closeX.src = "https://webapi.amap.com/images/close2.gif";
	closeX.onclick = closeInfoWindow;

	top.appendChild(titleD);
	top.appendChild(closeX);
	info.appendChild(top);

	// 定义中部内容
	var middle = document.createElement("div");
	middle.className = "info-middle";
	middle.style.backgroundColor = 'white';
	middle.innerHTML = content;
	info.appendChild(middle);

	// 定义底部内容
	var bottom = document.createElement("div");
	bottom.className = "info-bottom";
	bottom.style.position = 'relative';
	bottom.style.top = '0px';
	bottom.style.margin = '0 auto';
	var sharp = document.createElement("img");
	sharp.src = "https://webapi.amap.com/images/sharp.png";
	bottom.appendChild(sharp);
	info.appendChild(bottom);
	return info;
}

//关闭信息窗体
	function closeInfoWindow() {
	map.clearInfoWindow();
	}
</script>
<script type="text/javascript">
  //获取对象的初始位置
  var t = document.getElementById('secondary_content').offsetTop;
  window.onscroll = function() {
  //IE与Mozilla为前者，Chrome取后者的值
  var scroll_top = document.documentElement.scrollTop || document.body.scrollTop; 
  //滚动时分两种情况考虑，再赋值
  document.getElementById('secondary_content').style.top = scroll_top > t ? scroll_top - t + 'px' : 0;
  }
</script>
<!-- js -->
<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- stats -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
		<!-- /js files -->
		<link href='/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
		<link href='/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
		<script src='/js/aos.js'></script>
		<script src="/js/aosindex.js"></script>
		<!-- //js files -->
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




