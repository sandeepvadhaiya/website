<?php 
      $connection = mysqli_connect("localhost","root","","event");
include ("security.php");
include ("includes/head.inc.php"); 
?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.inc.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "includes/topbar.inc.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
 
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
              <a href="admin.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                 
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Register Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                           
                            
                                echo "Total Admin :";
                                $query = "SELECT a_id FROM admin ";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      </div>
                     </div>
                
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                  
                  <!--  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
              <a href="manager.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Register Manager</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                       
                            
                                echo "Total Manager :";
                                $query = "SELECT m_id FROM manager ";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-info shadow h-100 py-2">
               <a href="viewallalbums.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Albums</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          
                            
                                echo "Albums :";
                                $query = "SELECT * FROM tbl_album where status='process'";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-warning shadow h-100 py-2">
             <a href="manageposts.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total News Posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                      
                            
                                echo "News Posts :";
                                $query = "SELECT * FROM news ";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>


           

            <!-- Earnings (Monthly) Card Example 
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-warning shadow h-100 py-2">
             <a href="viewallpackages.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total packages</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                           
                            
                                echo "packages :";
                                $query ="select * from packages";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                
                  </div>
                </div>
              </div>
              </a>
            </div>



             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">  
             <a href="newbooking.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pending Bookings</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                       
                            
                                echo "Pending :";
                                $query = "SELECT * FROM book where status='0'";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
             <a href="approvedbooking.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">  Total Approved Bookings</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          
                            
                                echo "Approved :";
                                $query = "SELECT * FROM book where status='1'";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <a href="cancelledbooking.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Cancel Bookings</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          
                            
                          echo "Cancelled :";
                          $query = "SELECT * FROM book where status='2'";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                   <!-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="contactus.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contact Us</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                           
                            
                                echo "Contact us :";
                                $query ="select * from contactus";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  <!--  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>-->
                  </div>
                </div>
              </div>
              </a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <a href="viewclient.php">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total Clients </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                            $connection = mysqli_connect("localhost","root","","event");
                            
                                echo "Clients :";
                                $query = "SELECT * FROM client";
                                $query_run = mysqli_query($connection,$query);  
                                $row = mysqli_num_rows($query_run);
                                echo '<h5>'.$row.'</h5>';
                          ?>
                          </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          

          
          

      
           
        

   

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "includes/footer.inc.php" ?> 
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

<?php include "includes/scripts.inc.php" ?>

</body>

</html>
