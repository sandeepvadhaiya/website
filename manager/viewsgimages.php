<?php
include ("security.php"); 
include ("includes/head.inc.php");
 ?>
</head>
<body id="page-top">

                                        <?php $asid=$_REQUEST['ids']; ?>
                                        <style>.navigation_item{
                                                padding: 0px 5px;
                                                background: #fff;
                                                text-decoration: none;
                                                
                                                color: #e3e3e3 !important;
                                                font-size: 12px;
                                                border: 2px solid #e3e3e3;
                                                border-radius: 1px;
                                                -webkit-transition: all 0.2s linear;
                                                -moz-transition: all 0.2s linear;
                                                -ms-transition: all 0.2s linear;
                                                -o-transition: all 0.2s linear;
                                            }
                                            .navigation_item:hover,.selected_navigation_item{
                                                border: 2px solid #2A6496;
                                                border-radius: 2px;
                                                color: #2A6496 !important;
                                                background: #fff;
                                            }
                                            </style>
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
                            <h6 class="m-0 font-weight-bold text-primary">View Gallery</h6>
                 </div>
                 <div class="card-body">
                      <div class="table-responsive">
            
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                              
                                    <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <?php
                                        $con = mysqli_connect("localhost","root","","event");
                                        if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
                                        $start_from = ($page-1) * 20;
                                        $sql = "select * from tbl_gallery where status='process' and aid='$asid' ORDER BY gid ASC LIMIT $start_from, 20";
                                        $rs_result = mysqli_query ($con,$sql);
                                        ?>

                                                <table class="table">                                
                                                    <thead>
                                                        <tr>
                                                            <th>Image Name</th>
                                                            <th>Images</th>
                                                            <th colspan=2 width="18%">Action</th>                                          
                                                        </tr>
                                                    </thead>

                                                        <?php
                                                        while ($row = mysqli_fetch_assoc($rs_result))
                                                        {
                                                        ?>

                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo $row["gimages"]; ?></td>                                       
                                                        <td><a href='gchangeimage.php?key0=<?php echo  $row["gid"];?>&asid2=<?php echo $row["aid"]; ?>'><img src="../admin/gcatch/<?php echo $row["gimages"]; ?>"  width="100px"/></a></td>
                                                      

                                                         <td><a href='gallerydelete.php?key1=<?php echo $row["gid"]; ?> && key2=<?php echo $row["aid"]; ?>'><button type='button'   class='btn btn-danger'>Delete</button></a> 			   			   
                                                    </tr>
                                                    </tbody>

                                                    <?php
                                                    };
                                                    ?>
                                                </table>
                                                        <strong>Pages  </strong>

                                                        <?php
                                                        $sql = "SELECT COUNT(aid) FROM tbl_gallery where aid='$asid' AND status='process'";
                                                        $rs_result = mysqli_query($con,$sql);
                                                        $row = mysqli_fetch_row($rs_result);
                                                        $total_records = $row[0];
                                                        $total_pages = ceil($total_records / 20);
                                                        for ($i=1; $i<=$total_pages; $i++) {
                                                        echo "<a href='viewsgimages.php?page=$i&ids=$asid' class='navigation_item selected_navigation_item'>".$i."</a> ";
                                                        };
                                                        ?>
                                     </div>
                                
                                     </div>
                               
                                </div>
                          
                            </div>
                        
                        </div>
                  
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