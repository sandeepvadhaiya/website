<?php 
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['save']))
{
    $id =  $_POST['etype_id']; 
    $ename = $_POST['ename'];


    $query ="UPDATE eventtype SET ename='$ename' WHERE etype_id='$id'";
    $query_run = mysqli_query($connection,$query);  
    if( $query_run)
    {
      
        $_SESSION['success'] =  "your data is updated Successfully";
        header('Location: addevent.php');
    }
    else 
    {
       
        $_SESSION['status'] =  "your data is updated not Successfully";
        header('Location: addevent.php');
    }
}

?>
