<?php
session_start();
?>
<?php include "include/header.php" ?>
<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item active" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								<?php  if(isset($_SESSION['username'])){ ?><li class="m_nav_item" id="moble_nav_item_6"><a href="useraccount.php" class="link link--kumya"><i class="far fa fa-user" aria-hidden="true"></i><span data-letters="Account">Account </span></a></li></a><?php }else{ ?><li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login </span></a></li></a> <?php } ?>
							</ul>
						</nav>
					</div>
<?php include "include/headfoot.php" ?>
<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3 class="w3layouts_head">Our <span>Work</span></h3>
			<p class="w3_para"> Enjoy this moment.</p>	
			<p class="w3_para"> On the eve of your event, all the last-minute things you need to do can feel pretty overwhelming</p>
			<p class="w3_para">We are very visual beings. We like to see it to believe it. And sometimes we don’t trust our brain as much as we trust our eyes. Making decisions is often easier when you see something rather than if you take in a bunch of information about that something. </p>		
			
		</div>
	</div>	
		<!--header-->
		<div class="agile-ser">
			<div class="container">
				<section class="wrapper cl" >
					<?php  
						$con = mysqli_connect("localhost","root","","event");
						if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
						$start_from = ($page-1) * 12;
						$sql = "SELECT * FROM tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 12";
						$rs_result = mysqli_query($con,$sql);
	
						####### Fetch Results From Table ########

						while($row = mysqli_fetch_assoc($rs_result)) 
						{
						$aimage=$row['image'];
						$aid=$row['albumid'];
						$aname=$row['name'];
						$astatus=$row['status'];

					?>
					<div class="pic" style="margin-right:1px;margin-left:1px;margin-top:1px;margin-bottom:1px">
						<?php echo "<img src='admin/acatch/$aimage' class='pic-image' alt='Pic' alt='$aname'>"; ?>
						<?php echo"<a href='gallery.php?id=$aid'>
									<span class='pic-caption left-to-right'>
									<p style='color:#FFFFFF;font-size:24px'>$aname</p>
									</span></a>"?>
					</div>
						<?php } ?>
				 </section>
				<div class="clearfix"></div>
			</div>	
		</div>

	<!-- offer-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 w3l_services_footer_top_left">
				<img src="images/13.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 w3l_services_footer_top_right">
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>20 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Ut maximus pretium </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>25 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-map" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Aliquam faucibus </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>30 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-pie-chart" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Mauris vitae volut</a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //offer-bottom -->


<?php include "include/footer.php" ?>