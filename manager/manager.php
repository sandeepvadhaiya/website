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
         <div class="modal fade" id="addmanagerprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                   <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Manager Profile</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">

                          <form action="addmanagercode.php" method="POST">

                          <div class="card-body">
                            <div class="form-group">
                                <label> Manager Name </label>
                                <input type="text" name="m_name" class="form-control" placeholder="Enter Mabager name" required>
                            </div>
                            
                            <div class="form-group">
                                <label> Address </label>
                               <textarea name="address" class="form-control" placeholder="Enter address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label> Gender </label>
                                <div>
                                    <input type="radio" name="gender" value="male"  required/>   male
                                    <input type="radio" name="gender" value="female"  required/>   female
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Event </label>
                                <input type="text" name="event" class="form-control" placeholder="Enter Event" required>
                            </div>
                            <div class="form-group">
                                <label> Mobile No </label>
                                <input type="text" name="mobile_no" class="form-control" placeholder="Enter Mobile Number" required>
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
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" placeholder="Confirm Password" required>
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
            <div class="modal fade" id="editmanager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Manager Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                <form method="post" action="editmanager.php">
                <div class="card-body">

                            <div class="form-group">
                                <label> Manager Name </label>
                                <input type="text" id="m_name" name="m_name" class="form-control"  required>
                            </div>
                                
                            <div class="form-group">
                                <label> Address </label>
                               <textarea id="address" name="address" class="form-control"  required></textarea>
                            </div>
                            <div class="form-group">
                                <label> Gender </label>
                                <div>
                                    <input type="radio" id="gender" name="gender" value="male" required />   male
                                    <input type="radio" id="gender" name="gender" value="female"  required/>   female
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Event </label>
                                <input type="text" id="event" name="event" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label> Mobile No </label>
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" name="email" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" id="date" name="date" class="form-control"  required>
                            </div>
                    <td>
                    <input type="text" id="m_id" name="m_id" value="">  
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
                    <h6 class="m-0 font-weight-bold text-primary">Manager Profile 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmanagerprofile">
                              Add Manager Profile 
                            </button>
                    </h6>
                </div>
                <div class="card-body">
                     <div class="table-responsive">                       
                         <form method="post" action="manager.php">
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
                                   
                               </tr>  
                          </thead>  
                          <?php
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="select * from manager";
                                        $query_run =mysqli_query($connection,$query);
                                        $cnt=1;
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
                                                
                                                <a href=deletemanager.php?m_id=$row[0]>
                                                <button type='button'   class='btn btn-danger'>delete</button></a> 
                                            </td>  
                                            </tr>";
                                          } ?>     
                                </table>                     
                           </form>
                          
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
    $('#editmanager').on('show.bs.modal',function(e){
      var id = $(e.relatedTarget).data('rec-id');
      $('#m_id').val(id);
      $.ajax({
        url: 'ajax/fetchmanager.php',
        type: 'POST',
        data:{
          'id': id
        },
        success: function(data){
          //alert(data);
          $('#m_name').val(data.m_name);
          $('#address').val(data.address);
          $('#gender').val(data.gender);
          $('#event').val(data.event);
          $('#mobile_no').val(data.mobile_no);
          $('#email').val(data.email);
          $('#password').val(data.password)
          $('#date').val(data.date);
        }
      });
    });

    $('#saveData').click(function(){
      var id = $('#m_id').val();
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
