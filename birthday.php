
<?php include "include/packhead.php" ?>


<div class="events-agileits-w3layouts">
		<div class="container">
                     <?php
                    $connection = mysqli_connect("localhost","root","","event");                   
                    $query ="select * from packages where etype='birthday'";
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
                                <div><i class="fa fa-home"></i>    Hall Rent Price :  <?php echo ($row['hprice']);?></div>                                
                                <div><i class="fas fa fa-gift"></i>    Decoration Price :  <?php echo ($row['dprice']);?></div>                    
                                <div><i class="fas fa fa-cutlery"></i>    Thali Price :  <?php echo ($row['tprice']);?></div> 
                            </div>
                            </br>
                            <ul>
                                        <button type="button" class="btn  btn-danger" data-toggle="modal" data-target="#packages<?php echo $row['package_id']; ?>">
                                        View Package  <i class="fas fa fa-share"></i>
                                        </button>
                                        <a href="booking.php?pid=<?php echo ($row['package_id']);?>">
                                   
                                        <button type="button" class="btn  btn-danger">
                                      
                                        Book Now  <i class="fas fa fa-share"></i>
                                        </button> 
                                          </a>
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
	</div>
<!-- //Events --> 
<?php include "include/footer.php" ?>