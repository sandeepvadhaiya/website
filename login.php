<?php
session_start();
$connection = mysqli_connect("localhost","root","","event");
if(isset($_POST['login_btn']))
{
    
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    $query = "SELECT * FROM client WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username']=$email_login;
        header('Location: useraccount.php');
    }
    else
    {
        $_SESSION['status']= 'Email id / Password is invalid' ;
        header('Location: login.php');
    }
}
?>

<?php include "include/loginhead.php" ?>

  <body id="page-top">   

<div class="container">


  <!-- Outer Row -->
  <div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
           
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <form class="user" action="login.php" method="POST">

                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                  
             
                  
                  <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgetpassword.php">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="register.php">Create an Account!</a>
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
