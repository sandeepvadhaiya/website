<?php 
session_start();
     $connection = mysqli_connect("localhost","root","","event"); 
	$sql = "SELECT * FROM aboutus";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
?>

<?php include "include/header.php" ?>
<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item active" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								<?php  if(isset($_SESSION['username'])){ ?><li class="m_nav_item" id="moble_nav_item_6"><a href="useraccount.php" class="link link--kumya"><i class="far fa fa-user" aria-hidden="true"></i><span data-letters="Account">Account </span></a></li></a><?php }else{ ?><li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login </span></a></li></a> <?php } ?>
							
							</ul>
						</nav>
					</div>
<?php include "include/headfoot.php" ?>
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head"><?php echo $row['heading1'] ?></h3>
				<p class="w3_para"><?php echo $row['description1'] ?></p>
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3><?php echo $row['heading2'] ?></h3>
					<p><?php echo $row['description2'] ?></p>
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
					<div class="skillbar" data-percent="78">
					  <span class="skillbar-title" style="background: #f1703a;">Birthdays</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="54">
					  <span class="skillbar-title" style="background: #2980b9;">Wedding</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="76">
					  <span class="skillbar-title" style="background: #a0d034;">Corporate</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="80">
					  <span class="skillbar-title" style="background: #e7cc2c;">Parties</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- skills -->
	<script src="js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});
	</script>
<!-- //skills -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3><span>Agriculture</span> not only gives riches to a nation, but the
				only riches she can call her own</h3>
			<div class="agileits_w3layouts_learn_more agileits_learn_more hvr-radial-out">
				<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Our Mission
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
					
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- team -->
	<div class="welcome">
		<div class="container">
			<h3 class="w3layouts_head">Our Amazing <span>Team</span></h3>
				<p class="w3_para">The Event Planner team is made up of a mix of people. James and Ilona take care of corporate events. Josette is the wedding guru. Nicole is the creative one. Sergio is the merchandise expert. In addition to this group of people, a large support team helps out in everything the company does, in office work to on-site logistics planning. One thing we can truly say about our team is that we are very passionate about our job!</p>
	</br>
	</br>
				<h3 class="w3layouts_head">Our Event Management <span>Strategy</span></h3>
			<p class="w3_para">We identify key focus areas for every event we plan and consult you about what works best and what can help you derive maximum return on your investment.</p>
			<p class="w3_para">This approach helps us meet your expectations in a more focused manner.</p>
		</div>
	</div>
<!-- //team -->
<?php include "include/footer.php" ?>