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



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>  
                               <tr>  
                               <th > Name </th>
                                    <th> Address </th> 
                                    <th> Gender </th>
                                    <th> Event </th> 
                                    <th> Mobile No. </th>                                                   
                                    <th> Email </th>
                                    <th> Password </th>
                                    <th> Date </th>
                                    <th> ACTION </th>
                                    <th> ACTION </th>  
                               </tr>  
                          </thead>  
                          <?php
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="select * from manager";
                                        $query_run =mysqli_query($connection,$query);
                                         while($row=mysqli_fetch_row($query_run))
                                          {
                                            echo "<tr>
                                            <td>$row[1]</td>
                                            <td>$row[2]</td>
                                            <td>$row[3]</td>       
                                            <td>$row[4]</td>
                                            <td>$row[5]</td>
                                            <td>$row[6]</td>  
                                            <td>$row[7]</td>
                                            <td>$row[8]</td>
                                                                  
                                            <td>
                                            <button type='button' id='editdata' data-rec-id='$row[0]' class='btn btn-success' data-toggle='modal' data-target='#editmanager'>Edit </button>
                                            </td>   
                                            <td>
                                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalCenter' >
                                            <a href=deletemanager.php?m_id=$row[0]> Delete </td>  </button>  
                                            </tr>";
                                          } ?>     
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
<script>  
 $(document).ready(function(){  
      $('#dataTable').DataTable();  
 });  
 </script>  
