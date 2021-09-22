<?php
session_start();



if(strlen($_SESSION['username'])==0)
  { 
header('location:login.php');
}
$email1=$_SESSION['username'];

?>

<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
  
    $address = $_POST['address'];
    $startingtime = $_POST['startingtime'];
    
    $date = $_POST['date'];
    $people = $_POST['people'];
    $totalamount = $_POST['totalamount'];
    $status=0;
    $packageid = $_POST['packageid'];
    
   

        $query = "INSERT INTO book (name,phoneno,email,address,starttime,date,people,totalamount,status,package_id) VALUES ('$name','$phoneno','$email1','$address',' $startingtime','$date','$people','$totalamount','$status',' $packageid')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
           // echo "done";
            $_SESSION['success'] =  "Booking is Successfully";
            header('Location: index.php');
        }
        else 
        {
           // echo "not done";
            $_SESSION['status'] =  "Booking is Not Added";
            header('Location: login.php');
        }
   


}

?>


<?php include "include/loginhead.php" ?>
<body id="page-top">   

<div class="container">


  <!-- Outer Row -->
  <div class="row justify-content-center">

  <div class="col-xl-9 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
           
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome! Book Now</h1>
                </div>
                                   
                <form name="booking" action="booking.php" method="post">


                                    <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                       </div>
                                       <div class="col-sm-6">
                                                     <label>Phone Number</label>
                                                    <input type="text" class="form-control"  name="phoneno" placeholder="Enter Phone Number" required>
                                             </div> 
                                    </div>
                                             <div class="form-group">
                                                     <label>Email</label>
                                                    <input type="email" class="form-control"  name="email" value="<?php echo $email1;?>" placeholder="Enater Email"  disabled>
                                             </div> 
                                             <div class="form-group">
                                                     <label>Address</label>
                                                    <textarea type="text" class="form-control"  name="address" placeholder="Enater Address" required></textarea>
                                             </div>
                                    
                                             
                                            <div class="form-group">
                                                        <label>Starting Time</label>
                                                        <select type="text" class="form-control"  name="startingtime"  required>
                                                        <option value="">Select Starting Time</option>
                                                        <option value="1 a.m">1 a.m</option>
                                                            <option value="2 a.m">2 a.m</option>
                                                            <option value="3 a.m">3 a.m</option>
                                                            <option value="4 a.m">4 a.m</option>
                                                            <option value="5 a.m">5 a.m</option>
                                                            <option value="6 a.m">6 a.m</option>
                                                            <option value="7 a.m">7 a.m</option>
                                                            <option value="8 a.m">8 a.m</option>
                                                            <option value="9 a.m">9 a.m</option>
                                                            <option value="10 a.m">10 a.m</option>
                                                            <option value="11 a.m">11 a.m</option>
                                                            <option value="12 p.m">12 a.m</option>
                                                            <option value="1 p.m">1 p.m</option>
                                                            <option value="2 p.m">2 p.m</option>
                                                            <option value="3 p.m">3 p.m</option>
                                                            <option value="4 p.m">4 p.m</option>
                                                            <option value="5 p.m">5 p.m</option>
                                                            <option value="6 p.m">6 p.m</option>
                                                            <option value="7 p.m">7 p.m</option>
                                                            <option value="8 p.m">8 p.m</option>
                                                            <option value="9 p.m">9 p.m</option>
                                                            <option value="10 p.m">10 p.m</option>
                                                            <option value="10 p.m">10 p.m</option>
                                                            <option value="12 a.m">12 a.m</option>
                                                            </select>                                        
                                               
                                             </div> 
                                             <div class="form-group row">
                                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                                      <label>Date</label>
                                                      <input type="date" class="form-control"  name="date"  required>
                                                </div> 
                                            
                                            
                                            
                                                  <div class="col-sm-6">
                                                          <label>Number of Guest</label>
                                                          <input type="text" class="form-control" value="0" id="persons" name="people" placeholder="Enater Guest" required>
                                                  </div>                                                                                           
                                             </div>
                                             
<?php

$con = mysqli_connect("localhost","root","","event");


// Code for deleting product from cart
if(isset($_GET['pid']))
{
$rid=intval($_GET['pid']);

$sqls="select * from packages where package_id=$rid";
$results=mysqli_query($con, $sqls);
foreach($results as $rows)
 {

  ?>
                                             <div class="form-group row">
                                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                                      <label>Package Name</label>
                                                      <input type="text" class="form-control"  name="pname" value="<?php echo $rows['pname']; ?>" id="pname" disabled>
                                                </div> 
                                                <input type="hidden" id="hp"  value="<?php echo $rows['hprice'];?>"> 
                                                <input type="hidden" id="dp"  value="<?php echo $rows['dprice'];?>">  
                                                <input type="hidden" id="tp"  value="<?php echo $rows['tprice'];?>">  
                                                  <div class="col-sm-6">
                                                          <label>Hall Price</label>                                                          
                                                          <input type="text" class="form-control"  name="hprice"  id="hp" value="<?php echo $rows['hprice'];?>" disabled>
                                                  </div>                                                                                           
                                             </div>

                                             <div class="form-group row">
                                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                                      <label>Decoration Price</label>
                                                      <input type="text" class="form-control"  name="dprice" id="dp" value="<?php echo $rows['dprice']; ?>"  disabled>
                                                 </div> 
                                                  <div class="col-sm-6">
                                                          <label>Thali Price</label>
                                                          
                                                          <input type="text" class="form-control"  name="tprice"  id="tp" value="<?php echo $rows['tprice'];?>" disabled>
                                                  </div>                                                                                           
                                             </div>
 <?php } }?>    
 <div class="form-group row">
                                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                                      <label>Total</label>
                                                      <input type="text" class="form-control"  id="total" name="totalamount"   >
                                                </div> 
                                                
                                                                                                                                           
                                             </div>                  
                                             

                                            <td>
                                                <input type="hidden" id="pid" name="packageid" value="<?php echo $_GET['pid'];?>">  
                                              </td> 
                                         
                                            
                            
                  <hr>
                  <button type="submit" name="save" class="btn btn-primary btn-user btn-block"> book </button>
                </form>
              

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<script>
        document.getElementById('persons').addEventListener('keyup',sum);
        function sum(){
          
            var hprice = parseInt(document.getElementById('hp').value);
            var dprice = parseInt(document.getElementById('dp').value);
            var tprice = parseInt(document.getElementById('tp').value);
            var persons = parseInt(document.getElementById('persons').value);
            var total = parseInt(document.getElementById('total').value);
            var t = ( persons * tprice ) + (hprice + dprice);
            document.getElementById('total').value=t;

        }
    </script>


</body>

</html>