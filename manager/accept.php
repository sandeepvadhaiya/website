<?php

$connection = mysqli_connect("localhost","root","","event"); 
$s=$_REQUEST['s'];
$id=$_REQUEST['id'];
 $sql="update book set status='$s' where book_id='$id'";
$result=mysqli_query($connection,$sql);
if($result)
{
    header("location:newbooking.php");
}


?>