<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['login-btn']))
{
    
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    $query = "SELECT * FROM client WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username']=$email_login;
        header('Location: dashboard.php');
    }
    else
    {
        $_SESSION['status']= 'Email id / Password is invalid' ;
        header('Location: login.php');
    }
}
?>

