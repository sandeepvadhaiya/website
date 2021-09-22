<?php
$connection = mysqli_connect("localhost","root","","event"); 
$client_id=$_REQUEST['client_id'];
 $query="delete from client where client_id=$client_id";
 //echo $sql;
 $result=mysqli_query($connection, $query);
 header("Location:viewclient.php");
?>