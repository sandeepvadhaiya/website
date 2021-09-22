<?php
include('security.php');
$email=$_SESSION['username'];
?>

<?php include "include/bookhead.php" ?>
</br>

<section class="tj-account-frm">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-tabs">
							<ul class="nav nav-tabs" role="tablist">
									<li ><a href="userbooking.php" ><i class="far fa fa-user"></i> Active Booking</a></li>
									<li class="active" ><a href="approval.php" ><i class="far fa fa-user"></i> Completed Booking</a></li>
                                    <li ><a href="cancel.php" ><i class="far fa fa-user"></i> Cancelled Booking</a></li>
									<li><a href="logout.php" ><i class="fas fa-sign-out-alt"></i> Logout</a></li>
								</ul>
							</div>
						

							
		
            <div class="events-agileits-w3layouts">
	            	<div class="container">
                             <?php
                            $connection = mysqli_connect("localhost","root","","event");  
                                        
                            $query ="SELECT packages.package_id,packages.pname,packages.pimg,packages.hprice,packages.dprice,packages.pdescription,packages.tprice,book.starttime,book.date,book.people,book.bookdate,book.totalamount from book join packages on packages.package_id=book.package_id where book.status='1'  && book.email='$email'";
                            $query_run =mysqli_query($connection,$query);
                            while ($row=mysqli_fetch_array($query_run))
                            {
                            ?>
				<div class="popular-grids">
					<div class="col-md-4 popular-grid">
						<img src="admin/packimage/<?php echo ($row['pimg']);?>" alt=""/>
						<div class="popular-text">
                            <h5><a href="#" data-toggle="modal" data-target="#packages<?php echo $row['package_id']; ?>">view details      <i class="fas fa  fa-check"></i> </a></h5>  
                                                 
							<div class="detail-bottom">
                                 <div>   Date :  <?php echo ($row['date']);?></div>
                                <div>   Time :  <?php echo ($row['starttime']);?></div>
                                </br>
                                <div><i class="fa fa-home"></i>    Hall Rent Price :  <?php echo ($row['hprice']);?></div>                                
                                <div><i class="fas fa fa-gift"></i>    Decoration Price :  <?php echo ($row['dprice']);?></div>                    
                                <div><i class="fas fa fa-cutlery"></i>    Thali Price :  <?php echo ($row['tprice']);?></div> 
                                <div>   Total Amount :  <?php echo ($row['totalamount']);?></div> 
                            </div>
                            </br>
                            <ul>
                                        <button type="button" class="btn  btn-danger" data-toggle="modal" data-target="#packages<?php echo $row['package_id']; ?>">
                                        View Package  <i class="fas fa fa-share"></i>
                                        </button>
                                     
                          </ul>
                             </br>
                           

<!--========================================================================================================================-->
                                <!--add package model -->                                           
                                <div class="modal fade" id="packages<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">                                            
                                                <div class="modal-title">
                                                    <h1 id="exampleModalLabel">view package including</h1>                                      
                                                </div>
                                                    </br>
                                                <div class="modal-body">

                                                <form  method="POST">
                                                    <div class="card-body">                                                                           
                                                        <?php echo ($row['pdescription']);?>                                                                      
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                                 
                                                    </div>                                                   
                                                </form>                                           
                                        </div>
                                    </div>
                                </div>
                         
                                <!--/ end add package model -->

<!--========================================================================================================================-->

                                
                         


						</div>
                    </div>
                 </div>
					
				</div>
                <?php } ?> 
	
	</div>
<!-- //Events --> 
</div>
</div>
</div>
</div>






<?php include "include/footer.php" ?>
