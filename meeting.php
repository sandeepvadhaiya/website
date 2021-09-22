<?php include "include/header.php" ?>
<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item " id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
							</ul>
						</nav>
					</div>
<?php include "include/headfoot.php" ?>
<?php
         $connection = mysqli_connect("localhost","root","","event");                   
  $query ="select * from packages";
  $query_run =mysqli_query($connection,$query);
  while ($row=mysqli_fetch_array($query_run))
   {
?>
<div class="quicklinks-agile-info">
		<div class="container">
			
        <div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/10.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
					<h4><?php echo ($row['pname']);?></h4>
                <i class="fa fa-home"></i>   Hall Rent Price : </i> <?php echo ($row['hprice']);?></li>
                <div><i class="fas fa fa-cutlery"></i>   Thali Price :  <?php echo ($row['tprice']);?></div> 
                <div><i class="fas fa fa-gift"></i>   Decoration Price :  <?php echo ($row['dprice']);?></div> 
            
							<li><a href=""><i class="fa fa fa-home" aria-hidden="true"></i><?php echo ($row['hprice']);?></a></li>
							<li><a href="#"><i class="fas fa fa-cutlery" aria-hidden="true"></i>Locations & Venues</a></li>
							<li><a href="#"><i class="fas fa fa-gift" aria-hidden="true"></i>Catering & Food</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Rentals & Sales</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Entertainment & Entertainers</a></li>
							
					</div>																																			
					<div class="clearfix"> </div>
				</div>
	</div>
    <?php } ?>   
<!-- //quicklinks -->

</br>
</br>
<?php include "include/footer.php" ?>