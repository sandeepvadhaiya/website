<?php 

$con = mysqli_connect("localhost","root","","event");
error_reporting(0);

// Code for Forever deletionparmdel
if($_GET['presid'])
{
    $id=intval($_GET['presid']);
    $query=mysqli_query($con,"delete from  news  where news_id='$id'");
    $delmsg="Post deleted forever";
}


?>

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
                             <h6 class="m-10 font-weight-bold text-primary">view posts</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive"> 

                                   <?php if($delmsg){ ?>
                                    <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
                                    <?php } ?>

                         <form method="post" action="">
                              <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">   
                                      <thead>
                                          <tr>
                                                                                                                              
                                              <th>Title</th>
                                              <th>Post Details</th>
                                              <th>Image</th>
                                              <th>Action</th>
                                              <th>Action</th>
                                           </tr>
                                       </thead>

                                      <tbody>
                                             <?php
                                               $query=mysqli_query($con,"select * from news where news.is_active=1 ");                                                                                             
                                                while($row=mysqli_fetch_array($query))
                                                {
                                             ?>
                                            <tr>
                                            
                                                <td><b><?php echo ($row['posttitle']);?></b></td>
                                                <td><?php echo ($row['postdetails'])?></td>
                                                <td><a href='manageposts.php?newid=<?php echo  $row["news_id"];?>'><img src="../admin/postimages/<?php echo $row["postimage"]; ?>"  width="100px"/></a></td>                          
                                                <td>
                                                    <a href="editpost.php?pid=<?php echo ($row['news_id']);?>">
                                                    <button type='button'  class='btn btn-success'>edit</button></a> 
                                                </td>
                                                <td>
                                                    <a href="manageposts.php?presid=<?php echo ($row['news_id']);?>&&action=perdel" onclick="return confirm('Do you really want to delete ?')">
                                                    <button type='button'   class='btn btn-danger'>delete</button></a> 
                                                    </div>
                                                </td>
                                             </tr>
                                             <?php  } ?>                                                                                      
                                       </tbody>
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

<script>
$(document).ready(function(){  
      $('#dataTable').DataTable();  
 });  
 </script>  