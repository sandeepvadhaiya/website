<?php $aid=$_REQUEST['id']; ?>
<?php include "include/header.php" ?>
<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item active" id="moble_nav_item_3"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Gallery">Gallery</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_5"> <a href="news.php" class="link link--kumya"><i class="fa  fa-calendar-o" aria-hidden="true"></i><span data-letters="News">News</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="login.php" class="link link--kumya"><i class="fa  fa-desktop" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
							</ul>
						</nav>
					</div>
<?php include "include/headfoot.php" ?>
						<?php  
						$con = mysqli_connect("localhost","root","","event");
						$sql = "SELECT * FROM tbl_album where albumid='$aid'";
						$rs_result = mysqli_query ($con,$sql);
								
						####### Fetch Results From Table ########

						while ($row = mysqli_fetch_assoc($rs_result)) 
						{
						$aimage=$row['image'];
						$aname=$row['name'];
						$adesc=$row['adesc'];
						$astatus=$row['status'];

						?> 			 
</br>
			<div class="portfolio">
				
					<h3 class="w3layouts_head"><?php echo "$adesc"; ?></h3>
				
			</div>
			<div class="agile-ser">
		<div class="container">
			<div class="one-whole text-center">            
           		 
					<?php } ?>
                   
							<?php  
                                $con = mysqli_connect("localhost","root","","event");
                                $sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
								$num_rows = mysqli_num_rows(mysqli_query($con,$sql));		
								
                                ####### Fetch Results From Table ########

                                $rs_result = mysqli_query ($con,$sql);
                                while($row = mysqli_fetch_array($rs_result))
                                {
                                $gimage=$row['gimages'];

               				 ?>	
	
							<?php	echo "<a href='admin/gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'>
							<img src='admin/gcatch/$gimage' class='inline-block' /></a> ";?>			
							<?php } ?>	
									

				<div class="clearfix"></div>
			</div>	
		</div>	
								</div>
<br/>
<br/>
<br/>
	
	<!-- Primary Page Layout
	================================================== -->
        <script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
		
<?php include "include/footer.php" ?>