
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
	
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Album</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                        <!-- /.row -->
                                        <script type="application/javascript">
                                        function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){return true;}else{alert("only jpeg format supported!");fup.focus();return false;}}</script>
                                        <?php
                                        if(isset($_POST['submit']))
                                        {
                                        $aname = $_POST['aname'];
                                        $adesc = $_POST['adesc'];
                                        $adate = date('Y-m-d H:i:s');
                                        $status='process';
                                        $rd=rand();

                                        $uploadedfile = $_FILES['upload']['tmp_name'];

                                        $src = imagecreatefromjpeg($uploadedfile);

                                        list($width,$height)=getimagesize($uploadedfile);


                                        $newwidth=290;
                                        $newheight=($height/$width)*300;
                                        $tmp=imagecreatetruecolor($newwidth,$newheight);

                                        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

                                        $filename = "acatch/".$rd. $_FILES['upload']['name'];
                                        imagejpeg($tmp,$filename,100);

                                        imagedestroy($src);
                                        imagedestroy($tmp); 
                                        $photo=$rd.$_FILES['upload']['name'];
                                        move_uploaded_file($_FILES["upload"]["tmp_name"],"aupload/".$rd.$_FILES["upload"]["name"]);

                                        if (empty($aname))
                                        {
                                        echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
                                        }
                                        else
                                        {
                                            $con = mysqli_connect("localhost","root","","event");

                                        $query="INSERT INTO tbl_album(name,adesc,image,date,status) VALUES ('$aname','$adesc','$photo','$adate','$status')";
                                        if(mysqli_query($con,$query))
                                            {
                                        echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <a href='viewallalbums.php'>View albums</a> |<a href='addalbum.php'> Add new album</a></div>";
                                            }
                                            else
                                            {
                                                echo "error";
                                                print mysqli_error();
                                            }

                                        // echo "<script>location.href='addevent.php </script";
                                        }
                                        }	
                                        ?>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Album (Only upload jpg files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <label>Album Name or Title</label>
                                            <input class="form-control" placeholder="Enter Title" name="aname" require>
                                                
                                        
                                        </div>
                                        <div class="form-group">
                                        
                                            <label>Event Description</label>
                                             <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                             <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000" require></textarea>
                                                    
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Album Image</label>
                                            <input type="file" name="upload"  id="upload" require/>
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        <button type="reset"class="btn btn-info">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                
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
