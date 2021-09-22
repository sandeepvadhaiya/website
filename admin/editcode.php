<?php 
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['save']))
{
    $id =  $_POST['a_id']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =  $_POST['password'];

    $query ="UPDATE admin SET username='$username',email='$email',password='$password' WHERE a_id='$id'";
    $query_run = mysqli_query($connection,$query);  
    
    if( $query_run)
    {
      
        $_SESSION['success'] =  "your data is updated Successfully";
        header('Location: admin.php');
    }
    else 
    {
       
        $_SESSION['status'] =  "your data is updated not Successfully";
        header('Location: admin.php');
    }
}

?>
