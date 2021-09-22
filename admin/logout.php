<?php
include ("security.php");
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['admin']);
    header('Location: login.php');
}
?>