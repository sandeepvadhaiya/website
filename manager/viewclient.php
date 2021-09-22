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
                    <h6 class="m-0 font-weight-bold text-primary">Clients
                    </h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <form method="post" action="viewclient.php">
                         <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                         <thead>  
                               <tr>                                 
                                     <th >User Name </th>
                                    <th> Phone No </th>                                                                                
                                    <th> Email </th>
                                                               
                                                                 
                               </tr>  
                          </thead>  
                          <?php
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="select * from client";
                                        $query_run =mysqli_query($connection,$query);
                                        $cnt=1;
                                         while($row=mysqli_fetch_row($query_run))
                                          {
                                            echo "<tr>                                            
                                            <td>$row[1]</td>
                                            <td>$row[2]</td>
                                            <td>$row[3]</td>       
                                            
                                                                                                                                                    
                                        
                                            </tr>";
                                          } ?>     
                                </table>                     
                           </form>




                    </div>
            </div>
            </div>
         <!--5 End Page Heading -->

        </div>
        <!--4 End Begin Page Content -->

        </div>
      <!--3 End of Main Content -->

      <!-- Footer -->
      <?php include "includes/footer.inc.php" ?> 
      <!-- End of Footer -->

    </div>
    <!-- 2 End of Content Wrapper -->

  </div>
  <!--1 End of Page Wrapper -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  

<?php include "includes/scripts.inc.php" ?>

</body>
</html>

</body>
</html>