<?php
$connection = mysqli_connect("localhost","root","","event"); 
$id=$_REQUEST['a_id'];
 $query="delete from admin where a_id=$id";
 //echo $sql;
 $result=mysqli_query($connection, $query);
 header("Location:admin.php");
?>
