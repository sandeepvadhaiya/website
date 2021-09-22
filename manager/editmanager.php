<?php 
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['save']))
{
    $id =  $_POST['m_id']; 
    $m_name = $_POST['m_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $event = $_POST['event'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date=$_POST['date'];

    $query ="UPDATE manager SET m_name='$m_name', address='$address', gender='$gender', event='$event', mobile_no='$mobile_no', email='$email', password='$password', date='$date'  WHERE m_id='$id'";
    $query_run = mysqli_query($connection,$query);  
    if( $query_run)
    {
      
        $_SESSION['success'] =  "your data is updated Successfully";
        header('Location: manager.php');
    }
    else 
    {
       
        $_SESSION['status'] =  "your data is updated not Successfully";
        header('Location: manager.php');
    }
}

?>