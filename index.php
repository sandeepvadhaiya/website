<?php 
session_start();
$con = mysqli_connect("localhost","root","","event");

	$sql = "SELECT * FROM home";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Events Planning  a Wedding Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- header -->
			<div class="w3_agile_menu">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								
								<?php  if(isset($_SESSION['username'])){ ?><li class="m_nav_item" id="moble_nav_item_6"><a href="useraccount.php" class="link link--kumya"><i class="far fa fa-user" aria-hidden="true"></i><span data-letters="Account">Account </span></a></li></a><?php }else{ ?><li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login </span></a></li></a> <?php } ?>
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="index.php">Skyway Events Planning</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!-- //header -->
			<div class="w3ls_banner_info">
				<section class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>wedding planner</h3>
						<p><?php echo $row['description1'] ?> </p>
						
					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
					<h3>birthday parties </h3>
					<p><?php echo $row['description2'] ?> </p>

					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Corporate</h3>
						<p><?php echo $row['description3'] ?> </p>
					</div>
				</li>
			</ul>
		</div>
	</section>
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
			</div>
		</div>
	</div>
<!-- //banner -->


	

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="w3layouts_head">Welcome to our <span>Events</span></h3>
			<p class="w3_para"><?php echo $row['description4'] ?></p>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_banner_bottom_grid_left">
				<h4 class="w3layouts_head"><span>book now</span></h4>
				<a href="birthday.php">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
						</a>	
					</div>
					<h4>Birthdays</h4>
					<p>Let’s celebrate this day like there’s no tomorrow!</p>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
				<h4 class="w3layouts_head"><span>book now</span></h4>
				<a href="marriage.php">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
						</a>
					</div>
					<h4>wedding</h4>
					
					<p>Faith makes all things possible. Love makes all things easy, 
						"Email your heart and say your love will never die"</p>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
				<h4 class="w3layouts_head"><span>book now</span></h4>
				<a href="corporate.php">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-snowflake-o" aria-hidden="true"></i>
					</a>
					</div>
					<h4>Corporate</h4>
					<p>If people like you, they’ll listen to you, but if they trust you, they’ll do business with you.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div class="agile-ser">
		<div class="container">
			<h3 class="w3layouts_head">Our <span>Services</span></h3>
			<p class="w3_para"><?php echo $row['description5'] ?>.</p>
				<div class="agile-ser-tp">
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/img.jpg" class="img-responsive" alt="">
						</div>
						<h4>Party Locations</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/oo.jpg" class="img-responsive" alt="">
						</div>
						<h4>Catering & Food</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/c.jpg" class="img-responsive" alt="">
						</div>
						<h4>Decor & Decorations</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //services -->
<!-- quicklinks -->
	<div class="quicklinks-agile-info">
		<div class="container">
			<h3 class="w3layouts_head">Quick <span>Links</span></h3>
			<p class="w3_para">Events Is A Professionally Managed Event, 
				We perform event management functions successfully by working as an extension of our team.</p>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/birthday.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Birthdays Specials</h4>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Locations</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Catering & Food</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Rentals & Sales</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Supplies & Favors</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Entertainment & Entertainers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photographers & Videographers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Balloons & Flowers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Decor & Decorations</a></li>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-right ece">
							<h4>Wedding Parties</h4>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding & Engagement Rings</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Bridal Gowns</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Cakes</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photo & Video</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Officiants</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Ceremony Locations</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Balloons & Flowers</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Limos & Transportation</a></li>																
					</div>
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/wedding.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/10.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Corporate Events</h4>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Services</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Locations & Venues</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Catering & Food</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Rentals & Sales</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Entertainment & Entertainers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photographers & Videographers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Music</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Decorations & Centerpieces</a></li>
					</div>																																			
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //quicklinks -->
<?php include "include/footer.php" ?>