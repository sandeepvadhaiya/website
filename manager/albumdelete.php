<?php

$mykey1=$_REQUEST['key1'];
$status='delete';

$con = mysqli_connect("localhost","root","","event");
$sql = "update tbl_album set status='$status' where albumid = '$mykey1'";
$rs_result = mysqli_query ($con,$sql);

echo "<script>location.href='viewallalbums.php'</script>"

?> 