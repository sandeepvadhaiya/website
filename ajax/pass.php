<?php
session_start();
$con = mysqli_connect("localhost","root","","event");
if(isset($_POST['do_login']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM client where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	
	$email_id=$row['email'];
	$password=$row['password'];
	if($email==$email_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: rjgamer242@gmail.com" . "\r\n" .
                "CC: sandipvadhiya@gmail.com";
                if(mail($to,$subject,$txt,$headers))
                {
                
                    echo "done";
                }
            
			}
				else{
					echo 'fail';
				}
}
?>