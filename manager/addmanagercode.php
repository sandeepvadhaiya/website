<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['registerbtn']))
{
    $m_name = $_POST['m_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $event = $_POST['event'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $date=$_POST['date'];

    if($password === $confirmpassword)
    {
        $query = "INSERT INTO manager (m_name,address,gender,event,mobile_no,email,password,date)
        VALUES ('$m_name','$address','$gender',' $event','$mobile_no','$email','$password','$date')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
           // echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: manager.php');
        }
        else 
        {
           // echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: manager.php');
        }
    }
    else 
    {
       // echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: manager.php');
    }

}

?>