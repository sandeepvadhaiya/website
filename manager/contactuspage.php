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
          <form  method="post" action="editcontact.php">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact us</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table  class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Heading 1</th>
                        <th>Description 1</th>
                        <th>Heading 2</th>
                        <th>Description 2</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    <tr>
                    <?php                   
                        $connection = mysqli_connect("localhost","root","","event");  
                        $query ="select * from contactuspage";
                        $query_run =mysqli_query($connection,$query);
                        $row=mysqli_fetch_assoc($query_run);                   
                    ?>
                      <tr>
                      <div class="form-group">
                                  <td>    
                                       <input type="text" class="form-control" name="heading1"  value="<?php echo $row['heading1'] ?>">              
                                  </td>
                      </div>
                        <div class="form-group">
                                  <td>
			                                    <textarea name="description1" class="form-control" rows="8"><?php echo $row['description1'] ?></textarea>             
                                  </td>
                        </div>
                        <div class="form-group">
                                  <td>
                                           <input type="text" class="form-control" name="heading2"value="<?php echo $row['heading2'] ?>">             
                                  </td>
                       </div>
                       <div class="form-group">
                                   <td>    
			  	                              	<textarea class="form-control" name="description2" rows="8"><?php echo $row['description2'] ?></textarea>
                                   </td>
                        </div>
                        <div class="form-group">
                                    <td>
                                          <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">             
                                   </td>
                       </div>
                        <div class="form-group">
                                    <td>
                                    <textarea class="form-control" name="address" rows="8"><?php echo $row['address'] ?></textarea>
                                                     
                                    </td>
                        </div>
                        <div class="form-group">
                                    <td>
                                           <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">             
                                   </td>
                        </div>

                                    <input name="contactuspage_id" type="hidden" value="<?php echo $row['contactuspage_id'] ?>">              
            
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
