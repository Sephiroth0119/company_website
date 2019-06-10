<html>
<style>
 * {
            margin: 0px;
            padding: 0px;
    
        }
        #content {
            width: 100%;
            height: 700px;
	    font-size: 18px;
            margin: 0px auto;
            position: relative; /*相对定位,相对于.btn按钮*/
            text-align: left;
        }
        .abc ul li{
            margin:10px 0; 
        }

}
</style>

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
						<li class="nav-item">
						  <a class="nav-link" href="/contact/index.php">联系我们</a>
						</li>
						<li class="nav-item active">
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
		<li class="breadcrumb-item active">加入我们</li>
	</ol>
	<!--/model-->

<div id="secondary_content" style="float:left; background:#DDD; border:2px solid #000000; position:relative; top:0;">
 <ul>
   <li><a href="./index.php">加入我们:</a></li>
 </ul> 
</div>
<div id="content">
<div class="abc" style="width:80%;margin:auto">
<h4>项目经理:</h4>
<ul style="list-style:none;font-size:16px;padding-left:50px"> 
     <li>1、工程项目统筹,材料管理,人员调配,成本分析等;</li>
     <li>2、有弱电、计算机、网络相关经验,熟练使用word excel等办公软件;</li>
     <li>3、男性,身体强健,能吃苦耐劳,敬业踏实,热爱钻研专业技能;</li>
     <li>4、能组织协调工程施工,具有良好的沟通能力,分析解决问题能力强;</li>
     <li>5、有C1驾驶证,能够熟练的驾驶车辆,适应出差;</li>
</ul>
<br>
<h4>销售经理:</h4>
<ul style="list-style:none;font-size:16px;padding-left:50px"> 
     <li>1、对公司的产品进行销售和推广,完成公司的业绩指标,进一步开拓市场;</li>
     <li>2、和客户进行有效的沟通,把握客户的需求;</li>
     <li>3、招投标跟进，竣工验收跟踪;</li>
     <li>4、大专以上学历，市场营销专业，有过安防/电子类相关销售经验者优先；</li>
     <li>5、有优秀的市场营销策划能力，管理能力及组织协调能力;</li>
     <li>6、具有敏锐的市场嗅觉，善于沟通，有团队合作精神;</li>
     <li>7、有责任心,能承受较大的工作压力，跟据公司战略规划，制定本部门销售计划及量化，分销目标，设计销售模式。</li>
</ul>
</div>
</div>
</body>
<footer>
<?php
require('../footer.php');
?>
</footer>
</html>
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
