<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['registerbtn']))
{
    $ename = $_POST['eventname'];
 
        $query = "INSERT INTO eventtype (ename) VALUES ('$ename')";
        $query_run = mysqli_query($connection, $query);
 
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

        <!--########################################################################################################-->


         <!--add event model -->
         <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                   <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">

                          <form action="addevent.php" method="POST">

                          <div class="card-body">

                              <div class="form-group">
                                    <label> Add Event </label>
                                    <input type="text" name="eventname" class="form-control" placeholder="Enter Event Name" required>
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
         <!--/ end add event model -->

 <!--########################################################################################################-->


         <!--edit event model -->
         <div class="modal fade" id="editevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                   <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">

                          <form action="edevent.php" method="POST" >

                           <div class="card-body">
                                <div class="form-group">
                                    <label> Add Event </label>
                                    <input type="text" id="ename" name="ename" class="form-control" placeholder="Enter Event Name" required>
                                </div> 
                                <div>
                                  <td>
                                  <input type="text" id="etype_id" name="etype_id" value="">  
                                 </td> 
                                </div>                                                                          
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
         <!--/ end edit event model -->

        <!--5 Page Heading -->
          <div class="card shadow mb-4">                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addevent">
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
                                        <th> ACTION </th>
                                  </tr>  
                               </thead>  
                                       <?php                                     
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="select * from eventtype";
                                        $query_run =mysqli_query($connection,$query);
                                         while($row=mysqli_fetch_row($query_run))
                                          {
                                            echo "<tr>
                                            <td>$row[1]</td>                                                                                                          
                                            <td>
                                              <button type='button' id='editdata' data-rec-id='$row[0]' class='btn btn-success' data-toggle='modal' data-target='#editevent'>Edit </button>
                                            
                                              <a href=deleteevent.php?etype_id=$row[0]>
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


<script>
  $(document).ready(function(){
    $('#editevent').on('show.bs.modal',function(e){
      var id = $(e.relatedTarget).data('rec-id');
      $('#etype_id').val(id);
      $.ajax({
        url: 'ajax/fetchevent.php',
        type: 'POST',
        data:{
          'id': id
        },
        success: function(data){
          //alert(data);
          $('#ename').val(data.ename)
      
          
        }
      });
    });

    $('#saveData').click(function(){
      var id = $('#etype_id').val();
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
