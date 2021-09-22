<?php 
session_start();
     $connection = mysqli_connect("localhost","root","","event"); 
	$sql = "SELECT * FROM contactuspage";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<?php include "include/header.php" ?>
<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item active" id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								<?php  if(isset($_SESSION['username'])){ ?><li class="m_nav_item" id="moble_nav_item_6"><a href="useraccount.php" class="link link--kumya"><i class="far fa fa-user" aria-hidden="true"></i><span data-letters="Account">Account </span></a></li></a><?php }else{ ?><li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login </span></a></li></a> <?php } ?>
							</ul>
						</nav>
					</div>
<?php include "include/headfoot.php" ?>

<?php 
$connection = mysqli_connect("localhost","root","","event"); 
if(isset($_POST['submit']))
{

	$name =$_POST['name'];
	$email = $_POST['email'];
	$message  =$_POST['message'];
	
	$sql="INSERT INTO contactus(name,email,message) VALUES('$name','$email','$message')";
  //echo $sql;
  
	$result=mysqli_query($connection, $sql);


}
?>


<!-- contact -->
<div class="contact">
	<div class="container">
	<h3 class="w3layouts_head"><?php echo $row['heading1'] ?></h3>
			<p class="w3_para"><?php echo $row['description1'] ?></p>
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form action="#" method="post">
			  		<input type="text" placeholder="Name" name="name" required="">
			  		<input type="email" class="no-mar" placeholder="Email" name="email">
			  		<textarea placeholder="Message" name="message"></textarea>
			  		<input type="submit" value="submit" name="submit">
			  	</form>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84008838347!2d-74.25818880297903!3d40.705831640339994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1465278069158"> </iframe>
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>

<!--find-->
<div class="ag-ft agileinfo">
	<div class="container">
		<div class="footre-main">
			  <h3 class="w3layouts_head"><span><?php echo $row['heading2'] ?></h3>
			<p class="w3_para"><?php echo $row['description2'] ?></p>
			   <div class="ag-ft-bottom">
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-phone" aria-hidden="true"></i></span>
			   	 	 <div class="ftr-text">
				   		<h4>Phone</h4>
				   		<p><?php echo $row['phone'] ?></p>
				   		
			   	     </div>
			   	     <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			   	 	<div class="ftr-text">
						 <h4>Office Address</h4>
						 <p><?php echo $row['address'] ?></p>
			   	
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><i class="fa fa-envelope" aria-hidden="true"></i></span>
			   	 	<div class="ftr-text">
			   		  <h4>Email</h4>
						<p><?php echo $row['email'] ?></p>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="clearfix"> </div>
		     </div>			
		</div>
	</div>
</div>
<!-- //find -->

<?php include "include/footer.php" ?>