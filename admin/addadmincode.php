<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
  

    if($password === $confirmpassword)
    {
        $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
           // echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: admin.php');
        }
        else 
        {
           // echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: admin.php');
        }
    }
    else 
    {
       // echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: admin.php');
    }

}

?>