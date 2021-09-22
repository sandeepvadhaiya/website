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

                                <?php $agid=$_REQUEST['id']; ?>
                                <?php
                                $con = mysqli_connect("localhost","root","","event");
                                $sql = "select * from tbl_album where albumid='$agid'";
                                $rs_result = mysqli_query ($con,$sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_assoc($rs_result)) {
                                ?>
                                <?php $aname=$row["name"]; ?>
                                <?php };?>


        <!--5 Page Heading -->
          <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Gallery</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                     <?php
                                    $gid=$agid;
                                    $gname=$aname;
                                    $gdate = date('Y-m-d H:i:s');
                                    $status='process';
                                    $con = mysqli_connect("localhost","root","","event");
                                    $rd=rand();
                                    if(isset($_FILES['upload1'])){
                                        $errors= array();
                                        foreach($_FILES['upload1']['tmp_name'] as $key => $tmp_name)
                                        {
                                            $file_name = $key.$rd.$_FILES['upload1']['name'][$key];
                                            $file_size =$_FILES['upload1']['size'][$key];
                                            $file_tmp =$_FILES['upload1']['tmp_name'][$key];
                                            $file_type=$_FILES['upload1']['type'][$key];	
                                            
                                            if($file_size > 2097152){
                                                $errors[]='File size must be less than 2 MB';
                                            }	
                                            
                                            $desired_dir="../admin/gupload";
                                            if(empty($errors)==true)
                                            {
                                                if(is_dir($desired_dir)==false)
                                                {
                                                    mkdir("$desired_dir", '../admin/gupload');		
                                                }
                                                if(is_dir("$desired_dir/".$file_name)==false)
                                                {
                                                    $src = imagecreatefromjpeg($tmp_name);
                                                    list($width,$height)=getimagesize($tmp_name);
                                                    $newwidth=($width/$height)*150;
                                                    $newheight=150;
                                                    $tmp=imagecreatetruecolor($newwidth,$newheight);
                                                    imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                                                    $rd=rand();
                                                    $filename = "../admin/gcatch/".$file_name;
                                                    imagejpeg($tmp,$filename,100);
                                                    imagedestroy($src);
                                                    move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                                                }
                                                else
                                                {									// rename the file if another one exist
                                                    $new_dir="$desired_dir/".$file_name.time();
                                                    rename($file_tmp,$new_dir) ;				
                                                }
                                                $sql="INSERT into tbl_gallery(`gid`,`aid`,`gname`,`gimages`,`date`,`status`) VALUES('','$gid','$gname','$file_name','$gdate','$status')";
                                                $rs_result = mysqli_query($con,$sql);		
                                            }
                                            else
                                            {
                                            
                                            print_r($errors);
                                            
                                            }
                                        }
                                        if(empty($errors)){
                                        echo " <div class='alert alert-success'>Your Photos Is Successfully Uploded. <a href='viewphotos.php'>View Photos</a> |<a href='addevent.php'> Add new Photos</a></div>";                                        
                                        }
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

                                                            <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                                                                                                      
                                                                <div class="form-group">
                                                                    <label>Gallery Image</label>
                                                                    <input type="file" name="upload1[]" multiple  id="upload" />
                                        
                                                                    <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                                                </div>
                                                                
                                                                <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                                                
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
