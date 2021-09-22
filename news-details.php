<?php 

$con = mysqli_connect("localhost","root","","event");

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$newsid=intval($_GET['nid']);

$query=mysqli_query($con,"insert into comments(newsid,name,email,comment) values('$newsid','$name','$email','$comment')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
 
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
?>

<?php include "include/newshead.php" ?>

  <body>

    <!-- Page Content -->
    <div class="container">   
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
                <?php
                $pid=intval($_GET['nid']);
                $query=mysqli_query($con,"select * from news   where news.news_id='$pid'");
                while ($row=mysqli_fetch_array($query)) {
                ?>

                    <div class="card mb-4">

                      <div class="card-body"> 
                      
                        <div class="card text-white bg-danger mb-3">
                          <h3 class="card-header"><?php echo htmlentities($row['posttitle']);?></h3>
                            <p class="card-header"> <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                         </div>
                <hr />                
                      <div class="card text-white bg-danger mb-3">         
                          <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['postimage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>">
                      </div>
                  <p class="card-text"><?php 
                   $pt=$row['postdetails'];
                  echo  (substr($pt,0));?></p>
             
                          </div>
                          <div class="card-footer text-muted">
                          
                        
                          </div>
                        </div>
              <?php } ?>
                      </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->

 <div class="row" style="margin-top: -8%">
   <div class="col-md-8">
<div class="card my-4">
            <div class="card text-white bg-danger mb-3">                  
            <h5 class="card-header">Leave a Comment:</h5>
            </div>
            <div class="card-body">
              <form name="Comment" method="post">
      
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                <button type="reset" class="btn btn-info" name="clear">clear</button>
              </form>
            </div>
          </div>

  <!---Comment Display Section --->

 <?php 
 $query=mysqli_query($con,"select name,comment,postingdate from  comments where newsid='$pid' ");
while ($row=mysqli_fetch_array($query)) {
?>

<?php } ?>

        </div>
      </div>
    </div>


  
     


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
</html>