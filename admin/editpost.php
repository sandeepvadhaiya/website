<?php 

$con = mysqli_connect("localhost","root","","event");
error_reporting(0);


if(isset($_POST['update']))
{
$posttitle=$_POST['posttitle'];
$postdetails=$_POST['postdetails'];
$arr = explode(" ",$posttitle);
$url=implode("-",$arr);
$status=1;
$newsid=intval($_GET['pid']);
$query=mysqli_query($con,"update news set posttitle='$posttitle',postdetails='$postdetails',posturl='$url',is_active='$status' where news_id='$newsid'");
if($query)
{
$msg="Post updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

// image update
if(isset($_POST['update']))
{

$imgfile=$_FILES["postimage"]["name"];
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

// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgfile);



$newsid=intval($_GET['pid']);
$query=mysqli_query($con,"update news set postimage='$imgfile' where news_id='$newsid'");
if($query)
{
$msg="Post Feature Image updated ";
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
                    <h6 class="m-10 font-weight-bold text-primary">view posts</h6>
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
                                        $newsid=intval($_GET['pid']);
                                        $query=mysqli_query($con,"select * from news  where news.news_id='$newsid' and news.is_active=1 ");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">





 <form name="addpost" method="post" enctype="multipart/form-data">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Post Title</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo ($row['posttitle']);?>" name="posttitle" placeholder="Enter title" required>
</div>

  
         
     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
<textarea class="summernote" name="postdetails" required><?php echo ($row['postdetails']);?></textarea>
</div>
</div>
</div>

 <div class="row">
<div class="col-sm-12">
 <div class="card-box">
 <h4 class="m-b-30 m-t-0 header-title"><b>Current Post Image</b></h4>
 <img src="postimages/<?php echo ($row['postimage']);?>" width="300"/>
<br />

</div>
</div>
</div>
<?php } ?>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>New Feature Image</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage" >
</div>
</div>
</div>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>
</form>

                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->




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

