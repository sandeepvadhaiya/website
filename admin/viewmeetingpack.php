<?php 
  $connection = mysqli_connect("localhost","root","","event"); 
  error_reporting(0);
  // Code for Forever deletionparmdel
if($_GET['presid'])
{
    $id=intval($_GET['presid']);
    $query ="delete from  packages  where package_id='$id'";
    $query_run =mysqli_query($connection,$query);
    $delmsg="Post deleted forever";
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

                  
                        
 <!-- Content Row -->

 <div class="row">
 <?php
                         
  $query ="select * from packages where etype='meeting'";
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
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="editpackage.php?pid=<?php echo ($row['package_id']);?>">
                      <i class="fas fa-fw fa-pencil-square-o"></i>
                          Update
                       </a>
                       <a class="dropdown-item" href="viewmeetingpack.php?presid=<?php echo ($row['package_id']);?>&&action=perdel" onclick="return confirm('Do you really want to delete ?')"">
                       <i class="fas fa-fw  fa-times"></i>
                      
                          Delete
                       </a>
                     
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" 
                     src="packimage/<?php echo ($row['pimg']);?>" alt="">
                  
                  </div>
                  <i class="fas fa-fw  fa-pencil-square-o"></i>Package Name : <?php echo ($row['pname']);?>
                <div><i class="fas fa-fw  fa-star"></i>  Hall Rent Price :  <?php echo ($row['hprice']);?></div> 
                <div><i class="fas fa-fw fa-heart"></i>  Thali Price :  <?php echo ($row['tprice']);?></div> 
                <div><i class="fas fa-fw  fa-gift"></i>  Decoration Price :  <?php echo ($row['dprice']);?></div> 
            
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
