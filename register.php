
<?php
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['signupbtn']))
{
    $username = $_POST['username'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
  

    if($password === $confirmpassword)
    {
        $query = "INSERT INTO client (username,phoneno,email,password) VALUES ('$username','$phoneno','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
           // echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: login.php');
        }
        else 
        {
           // echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: login.php');
        }
    }
    else 
    {
       // echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: login.php');
    }

}

?>

<?php include "include/loginhead.php" ?>

<body id="page-top">

  <div class="container">
  <div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="register.php" method="POST">              
                <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user"  name="phoneno" placeholder="Phone Number" required>
                    </div>               
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="confirmpassword" placeholder="Repeat Password" required>
                  </div>
                </div>
                <button type="submit" name="signupbtn" class="btn btn-primary btn-user btn-block">   Register Account </button>
              
             
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgetpassword.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

  </div>
  </body>

</html>