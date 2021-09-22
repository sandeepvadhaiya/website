<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['submit']))
{
    $addthali = $_POST['thaliname'];
 
  

   
        $query = "INSERT INTO thali (tname)
        VALUES ('$addthali')";
        $query_run = mysqli_query($connection, $query);

}

?>
<?php 
include ("security.php");
include ("includes/head.inc.php"); 
?>
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
                    <h6 class="m-0 font-weight-bold text-primary">Add Food
                    </h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">

                    <form action="addfood.php" method="POST" name="addfood">
                             <div class="form-group">
                                            <label>Thali Name</label>
                                            <input type="text" class="form-control"  name="thaliname" placeholder="Enter Thali Name" required>
                             </div>
 
                            <div class="form-group">
                                  <button type="reset"class="btn btn-info">Reset</button> 
                                  <button  type="submit" class="btn btn-primary" name="submit"> Submit</button>

                                </div>
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