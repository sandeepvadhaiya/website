<?php
    header('Content-type: application/json');
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="event";

    $connection = mysqli_connect($servername,$username,$password,$dbname); 

    $id = $_POST['id'];
    $query="select * from admin where a_id =$id";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($query_run);
    //print_r($row);
    echo json_encode($row);

?>