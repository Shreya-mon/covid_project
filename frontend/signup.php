<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Care</title>
    <link rel="icon" href="./images/logo.jpg" type="image/png">
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
    <div class="container pb-5">
        <div class="row pt-5">
            <a href="./index.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                    style="color: rgb(8, 1, 15);"></i></a>

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" id="form">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Create a username" required>
                                </div>
                               
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter a password" required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" class="eye" onclick="myfunction()">
                                            <i id="hide1" class="fa fa-eye"></i>
				                            <i id="hide2" class="fa fa-eye-slash"></i></span>
                                    </div>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm password" required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" class="eye" onclick="myfunction1()">
                                            <i id="hide3" class="fa fa-eye"></i>
				                            <i id="hide4" class="fa fa-eye-slash"></i></span>
                                    </div>
                                </div>
                                <div id="showErrorcPwd"></div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" name="submit" class="btn float-right submit_btn">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Already have an account?<a href="sign.php">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        function myfunction1(){
			var x = document.getElementById("conpass");
			var y = document.getElementById("hide3");
			var z = document.getElementById("hide4");

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
    <script src="sweetalert.min.js"></script>
     <script>
        $(document).ready(function(){
            $('#conpass').keyup(function(){
                var pwd = $('#password').val();
                var cpwd = $('#conpass').val();
                if(cpwd!=pwd){
                    $('#showErrorcPwd').html('**Password are not matching.');
                    $('#showErrorcPwd').css('color','white');
                    return false;
                }
                else{
                    $('#showErrorcPwd').html('Password matches');
                    $('#showErrorcPwd').css('color','white');
                    return true;
                }
            });
        });
    </script>
    <?php
include("connection.php");
if(isset($_POST['submit'])){
    extract($_POST);
    if($password != $conpass){
        $error[]='Passwords do not match.';
    }
    if($conpass == ''){
        $error[]='Please confirm the password.';
    }
    $sql="SELECT * FROM `register_db` WHERE `email`='$email'";
    $res = mysqli_query($link, $sql);
    if(mysqli_num_rows($res)>0){?>
                <script>
                    swal({
                        title:"Email Already Exist",
                        //text:"Here",
                        icon:"warning",
                        button:"OK",
                     });
                </script>
            
      <?php      $error[]='Email Already Exists.'; 
    }
    if(!isset($error)){
    $result = mysqli_query($link,"INSERT INTO `register_db`(`id`,`uname`,`email`,`n_password`,`con_password`) VALUES('',
'".$_REQUEST['name']."','".$_REQUEST['email']."','".base64_encode($password)."','".$_REQUEST['conpass']."')");
    if ($result){?>
        <script>
            swal({
                title:"Registration Sucessful.",
                //text:"Here",
                icon:"success",
                button:"OK",
            });
        </script>
  <?php  }
    else{?>
        <script>
            swal({
                title:"Registration Failed",
                //text:"Here",
                icon:"error",
                button:"OK",
            });
        </script>";
 <?php   }
}
}
?>
</body>

</html>
