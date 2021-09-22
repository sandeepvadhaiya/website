<?php

$con = mysqli_connect("localhost","root","","event");
error_reporting(0);

// Code for deletion
if($_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"delete from comments  where comment_id='$id'");
	$delmsg="Category deleted forever";
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
                             <h6 class="m-10 font-weight-bold text-primary">Comments</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive"> 

                                    <?php if($msg){ ?>
                                    <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                    </div>
                                    <?php } ?>

                                    <?php if($delmsg){ ?>
                                    <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
                                    <?php } ?>

                                <form method="post" action="">
                                 <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">   
                                      <thead>
                                      <tr>
                                                                <th>#</th>
                                                                <th> Name</th>
                                                                <th>Email Id</th>
                                                                <th width="300">Comment</th>                                                          
                                                                <th>Post / News</th>
                                                                <th>Posting Date</th>
                                                                <th>Action</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                            <?php 
                                            $query=mysqli_query($con,"Select news.posttitle,comments.name,comments.email,comments.comment,comments.postingdate from comments join news on news.news_id=comments.newsid");
                                            $cnt=1;
                                            while($row=mysqli_fetch_array($query))
                                            {
                                            ?>

                                            <tr>
                                            <th scope="row"><?php echo ($cnt);?></th>
                                            <td><?php echo ($row['name']);?></td>
                                            <td><?php echo ($row['email']);?></td>
                                            <td><?php echo ($row['comment']);?></td>

                                            <td><?php echo ($row['posttitle']);?> </td>
                                            <td><?php echo ($row['postingdate']);?></td>
                                          
                                            <td>
                                                     <a href="comments.php?rid=<?php echo ($row['comment_id']);?>&&action=del"> 
                                                    <button type='button'   class='btn btn-danger'>delete</button></a> 
                                                </td>
                                              
                                            </tr>
                                            
                           
                                            <?php
                                            $cnt++;
                                            } ?>
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

<script>
$(document).ready(function(){  
      $('#dataTable').DataTable();  
 });  
 </script>  