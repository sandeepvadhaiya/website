
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
       
 <!-- Content Row -->

 <div class="row">
 <?php
         $connection = mysqli_connect("localhost","root","","event");                   
  $query ="select * from packages";
  $query_run =mysqli_query($connection,$query);
  while ($row=mysqli_fetch_array($query_run))
   {
?>

                 <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo ($row['pname']);?></h6>
                  <div class="dropdown no-arrow">
                       
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Update
                       </a>
                       <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Delete
                       </a>
                       <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                       </a>    
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" 
                     src="admin/packimage/<?php echo ($row['pimg']);?>" alt="">
                  
                  </div>
                <div><i class="fa fa-home"></i>   Hall Rent Price :  <?php echo ($row['hprice']);?></div> 
                <div><i class="fas fa fa-cutlery"></i>   Thali Price :  <?php echo ($row['tprice']);?></div> 
                <div><i class="fas fa fa-gift"></i>   Decoration Price :  <?php echo ($row['dprice']);?></div> 
            
                 </br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#packages<?php echo $row['package_id']; ?>">
                              view package  <i class="fas fa-fw fa-share"></i>
                  </button>  
                  
                  

                    <!--add admin model -->                                           
                    <div class="modal fade" id="packages<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">view package including</h5>
                                      
                                  </div>
                                  <div class="modal-body">

                                  <form  method="POST">
                                  <div class="card-body">   
                                                        
                                  <?php echo ($row['pdescription']);?>                      
                                
                                  </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                 
                                    </div>
                                  </form>
                                  </div>
                            </div>
                        </div>
                     </div>
                   <!--/ end add admin model -->
                </div>
                    </div>
                 </div>
              
                 <?php } ?>        
         
 </div>
           






<?php include "include/footer.php" ?>