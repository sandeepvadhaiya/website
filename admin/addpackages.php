<?php 

$con = mysqli_connect("localhost","root","","event");
error_reporting(0);

// For adding post  
if(isset($_POST['submit']))
{
$pname=$_POST['pname'];
$thali=$_POST['tname'];
$tprice=$_POST['tprice'];
$dprice=$_POST['dprice'];
$pdescription=$_POST['pdescription'];
$hprice=$_POST['hprice'];
$ename=$_POST['ename'];



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

$query=mysqli_query($con,"insert into packages(pname,tname,tprice,dprice,pdescription,hprice,etype,pimg) values('$pname','$thali','$tprice','$dprice','$pdescription','$hprice','$ename','$imgfile')");
if($query)
{
$msg="Post successfully added ";
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
                    <h6 class="m-0 font-weight-bold text-primary">Add Package
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
                    
                             <form name="addpackages" method="post" enctype="multipart/form-data">
                                      <div class="form-group">
                                            <label>Package Name</label>
                                            <input type="text" class="form-control"  name="pname" placeholder="Enter Package Name" required>
                                       </div>
                                       <div class="form-group">
                                                    <label>Select Thali</label>
                                                
                                                                <?php
                                                             
                                                                $sql = "select * from thali";
                                                                $rs_result = mysqli_query ($con,$sql);
                                                                echo "<select class='form-control' name='tname'>";
                                                                while($row = mysqli_fetch_assoc($rs_result)) 
                                                                {                                              
                                                                echo "<option value=$row[tname]>$row[tname]</option>";
                                                                };
                                                                echo "</select>";
                                                                                                        
                                                                 ?>
                                                </div> 
                                                <div class="form-group">
                                                     <label>Thali Price</label>
                                                    <input type="text" class="form-control"  name="tprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                                     <label>Decoration Price</label>
                                                    <input type="text" class="form-control"  name="dprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                                     <label>Hall Rent</label>
                                                    <input type="text" class="form-control"  name="hprice" placeholder="Enter Rate" required>
                                             </div> 
                                             <div class="form-group">
                                                    <label>Select Event</label>
                                                
                                                                <?php
                                                                $con = mysqli_connect("localhost","root","","event");
                                                                $sql = "select * from eventtype";
                                                                $rs_result = mysqli_query ($con,$sql);
                                                                echo "<select class='form-control' name='ename'>";
                                                                while($row = mysqli_fetch_assoc($rs_result)) 
                                                                {                                              
                                                                echo "<option value=$row[ename]>$row[ename]</option>";
                                                                };
                                                                echo "</select>";
                                                                                                        
                                                                 ?>
                                                </div> 
                                                                                                                                                   
                                             <div class="form-group">
                                                  <label><b>Post Details</b></label>            
                                                    <textarea class="summernote" name="pdescription" required></textarea>                                                 
                                             </div>                                                  
                                             <div class="form-group">
                                                  <label><b>Feature Image</b></label>                                                   
                                                    <input type="file" class="form-control" id="packimage" name="packimage"  required>
                                              </div> 
                                                                                                                                          
                                              <div class="form-group">
                                                    <button type="reset"class="btn btn-info">Reset</button> 
                                                    <button  type="submit" class="btn btn-primary" name="submit"> Submit</button>

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
       
