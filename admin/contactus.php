
<?php
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
	
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact us</h6>
            </div>
            <div class="card-body">
                     <div class="table-responsive">                       
                         <form method="post">
                         <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                              <thead>  
                                  <tr>  
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                  </tr>  
                              </thead>  
                                        <?php
                                          $connection = mysqli_connect("localhost","root","","event");  
                                          $query ="select * from contactus";
                                          $query_run =mysqli_query($connection,$query);
                                          while($row=mysqli_fetch_row($query_run))
                                          {
                                            echo "<tr>
                                            <td>$row[1]</td>
                                            <td>$row[2]</td>
                                          <td>$row[3]</td>

                                        


                                          <td>
                                          <a href=deletecontactus.php?contactus_id=$row[0]>
                                          <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalCenter' >
                                          Delete 
                                          </button></a>
                                          </td>
                                            </tr>";
                                          } ?>                        
                           </form>
                           </table>  
                       </div>
                 </div>
           
             
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
