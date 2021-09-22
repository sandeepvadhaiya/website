<?php
$connection = mysqli_connect("localhost","root","","event"); 
$m_id=$_REQUEST['m_id'];
 $query="delete from manager where m_id=$m_id";
 //echo $sql;
 $result=mysqli_query($connection, $query);
 header("Location:manager.php");
?>