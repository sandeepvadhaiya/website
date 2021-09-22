<?php
include('security.php');
  $connection = mysqli_connect("localhost","root","","event");    

	if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $phoneno=$_POST['phoneno'];
		$email=$_POST['email'];
    $password=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
        
        if(!empty($_POST['oldpassword'])) 
    {
		$duplicate=mysqli_query($connection,"select password from client where email='$email' && password='$password'");
		if (mysqli_num_rows($duplicate))
		{
            $sql="update client set username='$username',phoneno='$phoneno',password='$newpassword' where email='$email'";
            $quer=mysqli_query($connection,$sql);
            if($quer)
            {
                echo "<script>alert('Password changed');</script>";
            }
           
                
            
        }
        else{
            echo "notfound";
        }
    }
        else
        {
			
            $sql="update client set username='$username',phoneno='$phoneno' where email='$email'";
            $quer=mysqli_query($connection,$sql);
            if($quer)
            {
                echo "done";
            }
			
			
		}
	
	}
	
?>


<?php include "include/bookhead.php" ?>



<div class="welcome">
		<div class="container">
			
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3> Know more about us</h3>                   
                        <p>We are the most experienced team of peer-to-peer fundraising event experts in the nation. 
                        Our unparalleled Event Management Specialists know how to plan, 
                        promote and run an event that will exceed your goals. From cutting-edge marketing campaigns and fundraising 
                        technology to personalized customer service to an agile, adaptable on-event production team, we’ve got you covered.</p>
				</div>

       
        <div class="container">
              <div class="row justify-content-center">

              <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      
                      <div class="col-lg-12">
                        <div class="p-5">
                        <?php
										
								$connection = mysqli_connect("localhost","root","","event");    
										
										$email=$_SESSION['username'];
										$query= "select * from client where email='$email'";
										$result=mysqli_query($connection,$query);
										foreach($result as $row)
										{
										?>
                         
                          <form class="user" action="useraccount.php" method="POST">    
                   
								        
                            <div class="form-group">
                                  <input type="text" class="form-control form-control-user" name="username" value="<?php echo $row['username'] ?>" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-user"  name="phoneno" value="<?php echo $row['phoneno'] ?>" placeholder="Phone Number" required>
                                </div>               
                            <div class="form-group">                            
                              <input type="email"  class="form-control form-control-user" name="email" value="<?php echo $row['email'] ?>" placeholder="Email Address" required>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">                              
                                <input type="password" class="form-control form-control-user" name="oldpassword" placeholder=" old Password" required>
                              </div>
                              <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" name="newpassword" placeholder="New Password" required>
                              </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">  submit </button>                           
                         
                          </form>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
     </div>

  </div>
                
                <div class="clearfix"> </div>
			</div>
		</div>
	</div>
  
  

<?php include "include/footer.php" ?>
