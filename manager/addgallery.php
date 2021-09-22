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
                    <h6 class="m-0 font-weight-bold text-primary">Add Gallery
                    </h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <?php
		
		                    if(isset($_POST['submit']))
                             {
                               $ename = $_POST['gname'];
                             }
                     ?>
                     
                    <div class="row">
                         <div class="col-lg-12">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    Fill This Form To Add Gallery
                                </div>
                                 <div class="panel-body">
                                     <div class="row">
                                         <div class="col-lg-6">

                                             <form action="glink.php" method="post" enctype="multipart/form-data" name="upload">
                                            
                                                 <div class="form-group">
                                                    <label>Select Event Name or Title</label>

                                                                <?php
                                                                $con = mysqli_connect("localhost","root","","event");
                                                                $sql = "select * from tbl_album where status='process'";
                                                                $rs_result = mysqli_query ($con,$sql);
                                                                echo "<select class='form-control' name='gname'>";
                                                                while($row = mysqli_fetch_assoc($rs_result)) 
                                                                {                                              
                                                                echo "<option value=$row[albumid]>$row[name]</option>";
                                                                };
                                                                echo "</select>";
                                                                                                        
                                                                 ?>
                                                </div>
                                                    <button type="submit" class="btn btn-primary" name="submit">Go Next</button>
                                             </form>
                                         </div>
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
