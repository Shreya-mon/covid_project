<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>

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

    <link rel="stylesheet" href="css/signin.css?V=<?php echo time(); ?>">

</head>

<body>
    <div class="container pt-5">
        <div class="row pt-5">
            <a href="./index.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                    style="color: rgb(8, 1, 15);"></i></a>

            <div class="col-12">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"]; }?>" name="email" id="email" class="form-control" placeholder="Enter your Email" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"]; }?>" name="password" id="password" class="form-control" placeholder="Password" required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" class="eye" onclick="myfunction()">
                                            <i id="hide1" class="fa fa-eye"></i>
				                            <i id="hide2" class="fa fa-eye-slash"></i></span>
                                    </div>
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox" name="remember" value="1" <?php if(isset($_COOKIE["email"])){echo "checked";}?>>Remember Me
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Login" class="btn float-right login_btn">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="signup.php">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="./forgetpas.html">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="sweetalert.min.js"></script>
    <script type="text/javascript">
		function myfunction(){
			var x = document.getElementById("password");
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
<?php
if(isset($_SESSION['errorPass']) && $_SESSION['errorPass']!='')
{?>
<script>
            swal({
                title:"<?php echo $_SESSION['errorPass']; ?>",
                text:"Try Again",
                icon:"error",
                button:"OK",
            });
</script>
<?php
    unset($_SESSION['errorPass']);
}
if(isset($_SESSION['errorEmail']) && $_SESSION['errorEmail']!='')
{
?>
<script>
            swal({
                title:"<?php echo $_SESSION['errorEmail']; ?>",
                text:"Try Again Or Sign Up",
                icon:"error",
                button:"OK",
            });
</script>
<?php
    unset($_SESSION['errorEmail']);
}
?>
</body>



</html>