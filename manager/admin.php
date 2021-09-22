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


<!--########################################################################################################-->


         <!--add admin model -->
         <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                   <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">

                          <form action="addadmincode.php" method="POST">

                          <div class="card-body">
                        
                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                            </div>
                           
                        
                           </div>
                            <div class="modal-footer">
                                   <button type="reset" class="btn btn-info">reset</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                            </div>
                           </form>
                           </div>
                     </div>
                </div>
           </div>
         <!--/ end add admin model -->

<!--############################################################################################################-->

<!--########################################################################################################-->


            <!--Edit Modal -->
            <!-- Modal -->
            <div class="modal fade" id="editadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                <form method="post" action="editcode.php">
                <div class="card-body">

                    <div class="form-group">
                      <label>user name</label>
                      <input type="text" id="username" name="username"  class="form-control" value="">           
                    </div>
                    <div class="form-group">
                      <label>email</label>
                      <input type="email" id="email" name="email" class="form-control" value=""> 
                    </div>
                    <!--<div class="form-group">
                        <label >password</label>
                        <input type="text" id="password" name="password" class="form-control" value=""> 
                    </div> -->                  
                    <td>
                    <input type="hidden" id="a_id" name="a_id" value="">  
                   </td>                         
                  </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" name="save" id="saveData" class="btn btn-primary">Save changes</button>
                   </div>
                 </form>
                 </div>
           </div>
         </div>
       </div>
        <!-- end Modal -->
        <!--End Edit Modal -->

<!--########################################################################################################-->
   

      <!-- Begin Page Content -->
       <div class="container-fluid">

        <!-- Page Heading -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                              Add Admin Profile 
                            </button>
                    </h6>
                </div>
                <div class="card-body">
                     <div class="table-responsive">                       
                         <form method="post" action="register.php">
                         <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>  
                                  <tr>  
                                  <th > User Name </th>
                                        <th> Email </th>
                                                                                        
                                       
                                        <th> ACTION </th>
                                  </tr>  
                               </thead>  
                                       <?php                                     
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="select * from admin";
                                        $query_run =mysqli_query($connection,$query);
                                         while($row=mysqli_fetch_row($query_run))
                                          {
                                            echo "<tr>
                                            <td>$row[1]</td>
                                            <td>$row[2]</td>
                                         
                                                                  
                                            <td>
                                              <button type='button' id='editdata' data-rec-id='$row[0]' class='btn btn-success' data-toggle='modal' data-target='#editadmin'>Edit </button>
                                            
                                              <a href=deleteadmin.php?a_id=$row[0]>
                                                <button type='button'   class='btn btn-danger'>delete</button></a> 
                                          
                                            </td>
                                            </tr>";
                                          } 
                                       ?>     
                           </form>
                           </table>
                       </div>
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

<script>
  $(document).ready(function(){
    $('#editadmin').on('show.bs.modal',function(e){
      var id = $(e.relatedTarget).data('rec-id');
      $('#a_id').val(id);
      $.ajax({
        url: 'ajax/fetchadmin.php',
        type: 'POST',
        data:{
          'id': id
        },
        success: function(data){
          //alert(data);
          $('#username').val(data.username);
          $('#email').val(data.email);
          $('#password').val(data.password)
          
        }
      });
    });

    $('#saveData').click(function(){
      var id = $('#a_id').val();
      //alert(id);
    });
  });  
</script>



</body>
</html>
<script>

$(document).ready(function(){  
      $('#dataTable').DataTable();  
 });  
 </script>  
