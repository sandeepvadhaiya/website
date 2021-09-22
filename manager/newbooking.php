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
                    <h6 class="m-10 font-weight-bold text-primary">New Booking</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <form method="post" action="">
                         <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                         <thead>  
                               <tr>                                 
                                     <th > Name </th>
                                    <th> Phone No </th> 
                                    <th> Email </th>
                                    <th> Address </th> 
                                    <th> Starting Time </th>                                                   
                                    <th> Date </th>
                                    <th> No Of guest </th>
                                    <th> Booking Date / Time </th>
                                    <th> Package Name </th>
                                 
                                   
                                   
                               </tr>  
                          </thead>  
                          <?php
                                        $connection = mysqli_connect("localhost","root","","event");                         
                                        $query ="SELECT packages.pname,book.book_id,book.name,book.phoneno,book.email,book.address,book.starttime,book.date,book.people,book.bookdate from book join packages on packages.package_id=book.package_id where book.status='0'";
                                        $result =mysqli_query($connection,$query);
                                    
                                        
                                        foreach($result as $row)
                                        {
                                          ?>
                                          
                                            <tr>                                            
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['phoneno']; ?></td>
                                            <td><?php echo $row['email']; ?></td>                    
                                            <td><?php echo $row['address']; ?></td>     
                                            <td><?php echo $row['starttime']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['people']; ?></td> 
                                            <td><?php echo $row['bookdate']; ?></td>
                                            
                                            
                                           
                                            <td><?php echo $row['pname']; ?></td>                                                                                                       
                                            
                                         
                                            </td>  
                                            </tr>
                                      <?php    } ?>     
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