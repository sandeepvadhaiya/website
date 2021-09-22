<?php
    header('Content-type: application/json');
    $connection = mysqli_connect("localhost","root","","event");
	
	$connection= mysqli_connect($servername,$username,$password,$dbname);
    $id = $_REQUEST['id'];
    $query="select b.*,c.cl_name from booking as b, client as c where c.cl_id=b.c_id AND b_id = $id";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($query_run);
    //print_r($row);
    echo json_encode($row);

?>