
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
                             <h6 class="m-10 font-weight-bold text-primary">Home Page Contents</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                    <form  method="post" action="edithome.php">
                    <table  class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Description 1</th>
                        <th>Description 2</th>
                        <th>Description 3</th>
                        <th>Description 4</th>
                        <th>Description 5</th>
                        <th>Description 6</th>
                        <th>Action </th>
                       
                       
                    </tr>
                  </thead>
          
                  <tbody>
                    <tr>
                    <?php                   
                        $connection = mysqli_connect("localhost","root","","event");  
                        $query ="select * from home";
                        $query_run =mysqli_query($connection,$query);
                        $row=mysqli_fetch_assoc($query_run);                   
                    ?>
                      <tr>
                      <div class="form-group">
                                  <td>    
                                                 <textarea name="description1" class="form-control" rows="8"><?php echo $row['description1'] ?></textarea>               
                                  </td>
                      </div>
                        <div class="form-group">
                                  <td>
			                                    <textarea name="description2" class="form-control" rows="8"><?php echo $row['description2'] ?></textarea>             
                                  </td>
                        </div>
                        <div class="form-group">
                                  <td>
                                  <textarea name="description3" class="form-control" rows="8"><?php echo $row['description3'] ?></textarea>             
                                  </td>
                       </div>
                       <div class="form-group">
                                   <td>    
			  	                              	<textarea class="form-control" name="description4" rows="8"><?php echo $row['description4'] ?></textarea>
                                   </td>
                        </div>
                        <div class="form-group">
                                    <td>
                                                  <textarea name="description5" class="form-control" rows="8"><?php echo $row['description5'] ?></textarea>              
                                   </td>
                       </div>
                        <div class="form-group">
                                    <td>
                                                 <textarea name="description6" class="form-control" rows="8"><?php echo $row['description6'] ?></textarea> 
                                                     
                                    </td>
                        </div>
                     

                                    <input name="homepage_id" type="hidden" value="<?php echo $row['homepage_id'] ?>">              
            
                        <td>
                        <input name="save" type="submit" id="save" value="save"  class='btn btn-success' data-toggle='modal' data-target='#exampleModalCenter' valign="top">              
                        </td>
              </tr>
                    
                    </tr>
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

