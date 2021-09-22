<?php

$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$status='delete';

$con = mysqli_connect("localhost","root","","event");
$sql="update tbl_gallery set status='$status' where gid = '$mykey1'";
$rs_result = mysqli_query($con,$sql);	
echo "<script>location.href='viewsgimages.php?ids=$mykey2'</script>"

?> 