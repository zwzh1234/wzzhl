<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='http://fonts.useso.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
 <div class="header">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>Eat Cat </span></a></h1>
		</div>
		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="index.html">home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="upload.html">upload</a></li>
						<li><a  href="sign in.html">sign in</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">This is a web site about food.</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Hello And Welcome To  Eat Cat</h4>
			<a class="scroll down" href="#content-down"><img src="images/down.png" alt=""></a>
		</div>
</div>
<!--content-->
<div class="content" id="content-down">
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>About</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>This is a web site about food.</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-mid">
					
				<div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>北京烤鸭</h4>
					  <div class="top">
						<div class="front face"></div>
						<div class="back face">
						<p>烤鸭是具有世界声誉的北京著名菜式，由中国汉族人研制于明朝。它以色泽红艳，肉质细嫩，味道醇厚，肥而不腻的特色，被誉为“天下美味”。</p>
						</div>
					  </div>
					  <div class="bottom"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>糖醋里脊</h4>
					  <div class="top">
						<div class="front face front1"></div>
						<div class="back face">
						<p>糖醋里脊是经典汉族名菜之一。在浙江菜、鲁菜、川菜、粤菜和淮菜里都有此菜，以鲁菜的糖醋里脊最负盛名。糖醋里脊以猪里脊肉为主材，配以面粉，淀粉，醋等作料，酸甜可口，让人食欲大开。</p>
						</div>
					  </div>
					  <div class="bottom bottom1"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>锅包肉</h4>
					  <div class="top">
						<div class="front face front2"></div>
						<div class="back face">
						<p>锅包肉用猪里脊肉和淀粉，经两遍油炸而成，一炸熟，二炸色，出锅时汁并着以香菜点缀。外观红白相间，肉质外焦里嫩，微酸微甜。</p>
						</div>
					  </div>
					  <div class="bottom bottom2"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--services-->
<div class="services">
	<div class="container">
		<div class="services-top">
		  <div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Services</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
			  <p><span>There are many services</span></p>
			  <p>&nbsp;
		          </p>
		  </div>
			<div class="clearfix"> </div>
	  </div>
		<div class="service-top">
			<div class="col-md-5 service-top animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-leaf"></a>
						</div>
					</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-star-empty"></a>
						</div>					
				  </div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-folder-open"></a>
						</div>					
				  </div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-home"></a>
						</div>					
				  </div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
			<div class="col-md-7 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>1</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa1.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>2</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa2.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//services-->
<!--news-->
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>News</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
			  <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				  <p>There are some hot menus .You can comment and share with your friends there </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
				<div class="news-bot">
					<div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p>Specific description</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item1">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
								  </ul>
									<p>Specific description</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-bot">
					<div class="col-md-6 news-bottom1">
						<a href="single.html">
							<div class="content-item content-item2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
								  </ul>
									<p>Specific description</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item3">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
								  </ul>
									<p>Specific description</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			
			</div>
		</div>
	</div>
<!--//news-->
</div>
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Upload</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>					
						<span>Welcome to Eat Cat</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Eat Cat is a cat .And she really like eating </p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">Copyright &copy; 2016.xwxhy.com All rights reserved.</p>
		</div>
	</div>		
	<!--//footer-->
</body>
</html>