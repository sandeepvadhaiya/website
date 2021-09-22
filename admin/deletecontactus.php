<?php
$connection = mysqli_connect("localhost","root","","event"); 
$id=$_REQUEST['contactus_id'];
 $query="delete from contactus where contactus_id=$id";
 //echo $sql;
 $result=mysqli_query($connection, $query);
 header("Location:contactus.php");
?>
