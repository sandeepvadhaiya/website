<?php
    header('Content-type: application/json');
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="event";
	
	$connection= mysqli_connect($servername,$username,$password,$dbname);
    $id = $_REQUEST['id'];
    $sql="select * from eventtype where etype_id = $id";
    $result=mysqli_query($connection, $sql);
    $row=mysqli_fetch_assoc($result);
    //print_r($row);
    echo json_encode($row);

?>