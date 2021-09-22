<?php
$connection = mysqli_connect("localhost","root","","event"); 
$id=$_REQUEST['etype_id'];
 $query="delete from eventtype where etype_id=$id";
 //echo $sql;
 $result=mysqli_query($connection, $query);
 header("Location:addevent.php");
?>
