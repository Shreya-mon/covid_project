<?php

include("connection.php");
session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Covid-19</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css"
        integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="frontend/css/styles.css?V=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <style>
       
        html,body {
            height: 100%;
            background-color: #152733;
        }
        .button {

            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        ::placeholder {
            color: white;
            text-align: center;
        }


        .form-content {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;

        }

        .fa {
            color: black;
        }

        .fas {
            color: black;
        }

        .eye {
            position: absolute;
            margin-top: -8vmin;
            margin-left: 37vmin;

        }

        #hide1 {
            display: none;

        }   
    </style>  -->
    <style>
        body {
  font-family: "Karla", sans-serif;
  background-color: #d0d0ce;
  min-height: 100vh; }

.brand-wrapper {
  margin-bottom: 19px; }
  .brand-wrapper .logo {
    height: 37px; }

.login-card {
  border: 0;
  border-radius: 27.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden; }
  .login-card-img {
    border-radius: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover; }
  .login-card .card-body {
    padding: 85px 60px 60px; }
    @media (max-width: 422px) {
      .login-card .card-body {
        padding: 35px 24px; } }
  .login-card-description {
    font-size: 25px;
    color: #000;
    font-weight: normal;
    margin-bottom: 23px; }
  .login-card form {
    max-width: 326px; }
  .login-card .form-control {
    border: 1px solid #d5dae2;
    padding: 15px 25px;
    margin-bottom: 20px;
    min-height: 45px;
    font-size: 13px;
    line-height: 15;
    font-weight: normal; }
    .login-card .form-control::-webkit-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-moz-placeholder {
      color: #919aa3; }
    .login-card .form-control:-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::-ms-input-placeholder {
      color: #919aa3; }
    .login-card .form-control::placeholder {
      color: #919aa3; }
  .login-card .login-btn {
    padding: 13px 20px 12px;
    background-color: #000;
    border-radius: 4px;
    font-size: 17px;
    font-weight: bold;
    line-height: 20px;
    color: #fff;
    margin-bottom: 24px; }
    .login-card .login-btn:hover {
      border: 1px solid #000;
      background-color: transparent;
      color: #000; }
  .login-card .forgot-password-link {
    font-size: 14px;
    color: #919aa3;
    margin-bottom: 12px; }
  .login-card-footer-text {
    font-size: 16px;
    color: #0d2366;
    margin-bottom: 60px; }
    @media (max-width: 767px) {
      .login-card-footer-text {
        margin-bottom: 24px; } }
  .login-card-footer-nav a {
    font-size: 14px;
    color: #919aa3; }

.footer-link {
  position: absolute;
  bottom: 1rem;
  text-align: center;
  width: 100%; }
  .eye {
            position: absolute;
            margin-top: -8vmin;
            margin-left: 45vmin;

        }
    </style>
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="./frontend/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="./frontend/images/project_logo.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action="adminlogin1.php" method="POST" class="form-content">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="name" name="email" placeholder="abc@xyz.com" class="form-control">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
                    
                    <div class="input-group-addon eye" onclick="myfunction()">
                      <i id="hide1" class="fa fa-eye"></i>
                      <i id="hide2" class="fa fa-eye-slash"></i>
                    </div>
                    
                  </div>
                  <input type="submit" class="btn btn-block login-btn mb-4 " value="Log In">
                  <input type="reset" class="btn btn-block login-btn mb-4 ">
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- <div class="col-1">
      <a href="frontend/index.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
           style="color: white;margin-top: 10vh;margin-left: 10vmin;"></i></a>
      </div>
    <div style="color: white; margin-top: 7vh;" align="center"><b><h1>ADMIN LOG IN</h1><b></div>
    <div align="center" style="width:49%;" class="container  mx-auto">
        <form action="adminlogin1.php" method="POST" class="form-content">
	

        
        <label for="email"></label><br>
        <span class="email"><i class="fas fa-envelope"></i></span>
        <input type="text" id="name" name="email" placeholder="Email" style="background-color: darkslategray;
  color: white; font-size: 20px; font: bold;" required><br><br>
        <label for="password"></label><br>
        <span class="email"><i class="fas fa-key"></i></span>
        <input type="password" id="pass" name="pass" placeholder="Password" style="background-color: darkslategray;
  color: white; font-size: 20px; font: bold;" required><br><br>
        <span class="eye" onclick="myfunction()">
                                            <i id="hide1" class="fa fa-eye"></i>
				                            <i id="hide2" class="fa fa-eye-slash"></i></span>
  
  
        <input type="submit" class="button" value="Log In">
        <input type="reset" class="button">
    
    <br><br><br>
</form>
</div> -->
<script type="text/javascript">
		function myfunction(){
			var x = document.getElementById("pass");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if(x.type == 'password'){
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}
    </script>
<script src="frontend/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['error']) && $_SESSION['error']!='')
{?>
<script>
  swal({
      title:"<?php echo $_SESSION['error']; ?>",
      icon:"error",
      button:"OK",
  });
</script>

    <?php
    unset($_SESSION['error']);
}?>


</body>

</html>