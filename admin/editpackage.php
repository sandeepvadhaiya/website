<?php 

$con = mysqli_connect("localhost","root","","event");
error_reporting(0);

// For adding post  
if(isset($_POST['update']))
{
$pname=$_POST['pname'];
$thali=$_POST['tname'];
$tprice=$_POST['tprice'];
$dprice=$_POST['dprice'];
$pdescription=$_POST['pdescription'];
$hprice=$_POST['hprice'];
$ename=$_POST['ename'];
$packageid=intval($_GET['pid']);
$query=mysqli_query($con,"update packages set pname='$pname',tname='$thali',tprice='$tprice',dprice='$dprice',pdescription='$pdescription',hprice='$hprice',etype='$ename' where package_id='$packageid'");
if($query)
{
$msg="Post updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}



if(isset($_POST['update']))
{
$imgfile=$_FILES["packimage"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
//$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["packimage"]["tmp_name"],"packimage/".$imgfile);




$packageid=intval($_GET['pid']);
$query=mysqli_query($con,"update  packages  set pimg='$imgfile' where package_id='$packageid'");
if($query)
{
$msg="Post Feature Image updated";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
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
                    <h6 class="m-0 font-weight-bold text-primary">Add Event
                    </h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">


                     <!---Success Message--->  
                                  <?php if($msg){ ?>
                                  <div class="alert alert-success" role="alert">
                                  <strong>Well done!</strong> <?php echo ($msg);?>
                                  </div>
                                  <?php } ?>

                                  <!---Error Message--->
                                  <?php if($error){ ?>
                                  <div class="alert alert-danger" role="alert">
                                  <strong>Oh snap!</strong> <?php echo ($error);?></div>
                                  <?php } ?>

                                          
                                    <?php
                                        $packageid=intval($_GET['pid']);
                                        $query=mysqli_query($con,"select * from packages  where packages.package_id='$packageid'");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
               
                             <form name="addpackages" method="post" enctype="multipart/form-data">
                                      <div class="form-group">
                                            <label>Package Name</label>
                                            <input type="text" class="form-control" value="<?php echo ($row['pname']);?>" name="pname" placeholder="Enter Package Name" required>
                                       </div>
                                        <div class="form-group">
                                                  <label>Select Event</label>
                                                  <?php
                                                
                                                              
                                                             
                                                                $sql2 = "select * from thali";
                                                                $rs_result2 = mysqli_query ($con,$sql2);
                                                                echo "<select class='form-control' name='tname'>";
                                                                while($row2 = mysqli_fetch_assoc($rs_result2)) 
                                                                {                                              
                                                                echo "<option value=$row2[tname]>$row2[tname]</option>";
                                                                };
                                                                echo "</select>";
                                                                                                        
                                                         ?>     
                                                </div>
                                                <div class="form-group">
                                                     <label>Thali Price</label>
                                                    <input type="text" class="form-control" value="<?php echo ($row['tprice']);?>" name="tprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                                     <label>Decoration Price</label>
                                                    <input type="text" class="form-control" value="<?php echo ($row['dprice']);?>" name="dprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                                     <label>Hall Rent</label>
                                                    <input type="text" class="form-control"  value="<?php echo ($row['hprice']);?>" name="hprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                             <label>Select Event</label>
                                             <?php
                                                   
                                                
                                                          
                                                                $con = mysqli_connect("localhost","root","","event");
                                                                $sql1 = "select * from eventtype";
                                                                $rs_result1 = mysqli_query ($con,$sql1);
                                                                echo "<select class='form-control' name='ename'>";
                                                                while($row1 = mysqli_fetch_assoc($rs_result1)) 
                                                                {                                              
                                                                echo "<option value=$row1[ename]>$row1[ename]</option>";
                                                                };
                                                                echo "</select>";
                                                        ?>                                                
                                                                
                                                </div>
                                                                                                                                                   
                                             <div class="form-group">
                                                  <label><b>Post Details</b></label>            
                                                    <textarea class="summernote" name="pdescription" required><?php echo ($row['pdescription']);?></textarea>                                                 
                                             </div>     
                                             <div class="form-group">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Current Post Image</b></h4>
                                                    <img src="packimage/<?php echo ($row['pimg']);?>" width="300"/>
                                                    <br />

                                                    </div>  
                                                    <?php } ?>     

                                             <div class="form-group">
                                                  <label><b>Feature Image</b></label>                                                   
                                                    <input type="file" class="form-control" id="packimage" name="packimage"  required>
                                              </div> 
                                                                                                                                        
                                              <div class="form-group">
                                              <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

                                              </div>
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

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
       
