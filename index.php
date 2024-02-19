<?php ob_start(); ?>
<?php include 'include/dbConnection.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login | Quik Track Admin - Kelsey Developments PLC | </title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <!-- Developer Style -->
    <link href="assets/developer/css/developer.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
<!--
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->

        <div class="row">


          <div class="col-md-12 ">
            <div class="x_panel">
              <div class="x_title">
                <div class="mb-3 text-center">
                  <img src="assets/images/logo-icon.png" width="60" alt="" />
                </div>

                <div class="text-center mb-4">
                  <h5 class="">Quick Track Admin</h5>
                  <p class="mb-0">Please log in to your account</p>
                </div>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <br />

                <div class="col-md-12 center-margin">

                  <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label>Email address</label>
                      <input type="email" class="form-control" placeholder="email@example.com" name="U_Email" required>
                    </div>


                     <div class="form-group row">
                       <label class="label-align">Password</label>

                        <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="U_Password"  required />

                          <span style="position: absolute;right:20px;top:115px;" onclick="hideshow()" >
                              <i id="slash" class="fa fa-eye-slash"></i>
                              <i id="eye" class="fa fa-eye"></i>
                          </span>

                    </div>

                    <!-- <div class="form-group row">
                      <label>Password</label>
                      <input type="password" class="form-control border-end-0" id="inputChoosePassword"  placeholder="Enter Password" name="U_Password" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                    </div> -->

                    <div class="ln_solid"></div>
                        <div class="col-12">
  												<p align="center"><code><?php include 'PHP/Read/loginScript.php'; ?></code></p>
  												<div class="d-grid">
  												<button type="submit" class="col-md-12 btn btn-login">Submit</button>
  												</div>
  											</div>

                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>

<!-- registration_form -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    <p class="mb-0">© 2023 - <script> document.write(new Date().getFullYear())</script> All right reserved. Quik Track for Blue Ocean Group Of Companies & Kelsey Developments PLC, made with ❤️ by <a href="javascript:;"  class="fw-medium">Blue Ocean IT</a></p>
  </footer>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->

      </div>
    </div>

    <script>
  		function hideshow(){
  			var password = document.getElementById("password1");
  			var slash = document.getElementById("slash");
  			var eye = document.getElementById("eye");

  			if(password.type === 'password'){
  				password.type = "text";
  				slash.style.display = "block";
  				eye.style.display = "none";
  			}
  			else{
  				password.type = "password";
  				slash.style.display = "none";
  				eye.style.display = "block";
  			}

  		}
  	</script>




  </body>
</html>
