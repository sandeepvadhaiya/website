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
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below.</p>
                  </div>

                  <form  role="form" autocomplete="off" class="user" method="post" action="ajax/pass.php" onsubmit="return do_login();" >
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email"  placeholder="Enter Email Address..." >
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- Js Files End --> 

		<script type="text/javascript">
function do_login()
{
 var email=$("#email").val();
 var pass=$("#pwd").val();
 if(email!="" ){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/pass.php',
  data:{
	do_login:"do_login",
   email:email
   
  },
  success:function(result){
  if(result=="done")
  {
	Swal.fire(
								'Sucess!',
								'password sent!',
								'success'
							  )
  }
  else if(result=="fail")
  {
    Swal.fire(
								'Incorrect!',
								'Wrong email !',
								'error'
							  )
  }
  }
  });
 }

 else
 {
	Swal.fire(
								'Error',
								'Please fill all details!',
								'error'
							  )
 }

 return false;
}
</script>


  </body>

</html>