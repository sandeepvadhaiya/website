<?php $aid=$_POST['aid']; ?>
<?php
include ("security.php"); 
include ("includes/head.inc.php");
 ?>
</head>

<body id="page-top">

  <!--1 Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php include "includes/sidebar.inc.php" ?>   
    <!-- End of Sidebar -->

    <!--2 Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!--3 Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "includes/topbar.inc.php" ?>
        <!-- End of Topbar -->

        <!--4 Begin Page Content -->
        <div class="container-fluid">

        <!--5 Page Heading -->
          <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Gallery
                    </h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">


										<!--script-nav-->
									<script>
									$("span.menu").click(function(){
									$(".top-menu ul").slideToggle("slow" , function(){
									});
									});
									</script>		  
						</div>
					</div>	
					
			<!--================================================== -->
					<div class="gallery-head">
						<div class="gallery-info">
							<div class="container">
								<a href="gallery.php">Home/</a>
						
										<?php  
										
											$con = mysqli_connect("localhost","root","","dotcode");
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
												<h2>
												<?php echo "$aname"; ?> 
												</h2>
									
																</div>		 
															</div>
															<div class="gallery-text">
																
															</div>

																<div class="container">
																	<div class="one-whole text-center">
																	
																	<p><?php echo "$adesc"; ?></p>
																		<?php } ?>
																		<hr style="border:solid 1px;margin-top:0px;">
														<p style="margin-left:75px">
																		<?php  
																$con = mysqli_connect("localhost","root","","dotcode");

$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
$num_rows = mysqli_num_rows(mysqli_query($con,$sql));	
$rs_result = mysqli_query ($con,$sql);
while($row = mysqli_fetch_array($rs_result))
{
$gimage=$row['gimages'];

?>	
	
<?php	echo "<a href='gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='gcatch/$gimage' class='inline-block' /></a> ";?>			
<?php } ?>				
</p>
				
</div>			
</div>
<div class="clearfix"></div>
</div>	
</div>	





	
	<!-- Bottom Footer Section
	================================================== -->
<div class="bottom_footer_section">
	<div class="container">
	<div class="sixteen columns bottom_line_dev">	
		
<br/><br/>		
<hr style="border:solid 1px;margin-top:0px">
<br/>
<br/>
<br/>
		</div>	
        
	</div>	
</div>	


	<!-- Primary Page Layout
	================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
	
<!-- JavaScript
	================================================== -->
	<script src="js/jquery-main.js" type="text/javascript"></script>
	<script type='text/javascript' src="js/jquery-latest.min.js"></script>
	<script type='text/javascript' src='js/menu_jquery.js'></script>
	<script src="js/car/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/car/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="js/car/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
	<script src="js/ticker.js" type="text/javascript"></script>
	<script type='text/javascript' src='js/jquery.common.min.js'></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>



<!-- End Document
================================================== -->




</body>

</html>