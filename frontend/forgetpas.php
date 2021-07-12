<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Covid Care</title>
    <link rel="icon" href="./images/logo.jpg" type="image/png">
</head>
<body>
<script src="sweetalert.min.js"></script>
</body>
</html>


<?php
include_once "connection.php";
date_default_timezone_set("Asia/Kolkata");
session_start();
$sucess="";
?>
  
<?php

if(isset($_REQUEST['submit']))
{
    $sql=mysqli_query($link,"SELECT * FROM `register_db` WHERE `email`='".$_REQUEST['email']."'");
    if(mysqli_num_rows($sql)>0)
    {
        
        $otp=rand(00000000,11111111);


             
            $to_email = $_REQUEST['email'];
            $subject = 'Reset password ';
            $message = 'OTP to reset password : '.$otp;
            $headers = 'OTP authentication';
            mail($to_email,$subject,$message,$headers);
            $_SESSION['email']=$_REQUEST['email'];
            $email=$_SESSION['email'];



            $sql=mysqli_query($link,"INSERT INTO `reset_pass`(`id`, `user_id`, `otp`, `is_expired`, `create_at`) VALUES ('','".$_REQUEST['email']."','".$otp."',0,'".date("Y-m-d H:i:s")."')");

            if(!empty($sql))
            {
                $sucess=1;

                
            }
        
    }
    else
    {
        ?>
         <script>
                    swal({
                        title:"Email does not  Exist",
                        //text:"Here",
                        icon:"error",
                        button:"OK",
                     });
                </script>
        <?php
    }
}

if(!empty($_POST['submit_otp']))
{
    $otp1=$_POST["otp"];
    $sql=mysqli_query($link,"SELECT * FROM `reset_pass` WHERE  `otp`='$otp1' AND `is_expired`!=1 AND 
        NOW() <= DATE_ADD(`create_at`, INTERVAL 10 MINUTE) ");
    if(mysqli_num_rows($sql)>0)
    {
        $result=mysqli_query($link,"UPDATE `reset_pass` SET `is_expired`=1 WHERE `otp`='$otp1'");
        $sucess=2;
    }
    else{
     $sucess=1;
     ?>
      <script>
                    swal({
                        title:"Invalid OTP",
                        //text:"Here",
                        icon:"error",
                        button:"OK",
                     });
                </script>
     <?php
    }
}

if(!empty($_POST['submit_pass']))
{
     extract($_POST);
    if($password != $conpass){
        $error[]='Passwords do not match.';
    }
    if($conpass == ''){
        $error[]='Please confirm the password.';
    }
    
    $sql = mysqli_query($link,"UPDATE `register_db`  SET  `n_password`='$password', `con_password`='$conpass'  WHERE
     `email`='".$_SESSION['email']."'");
    if(isset($sql))
    {
        ?>
         <script>
                    swal({
                        title:"Password Updated Successfully !",
                        //text:"Here",
                        icon:"success",
                        button:"OK",
                     });
                </script>
        <?php
    }

    $sucess="";
}



?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Care</title>

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

    <link rel="stylesheet" href="css/signin.css">
<style>
 #hide1 {
            display: none;

        }   
 #hide3 {
            display: none;

        }   
</style>

</head>

<body>
    <div class="container pt-5">
        <div class="row pt-5">
            <a href="./sign.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                    style="color: rgb(8, 1, 15);"></i></a>
<?php if($sucess=="")
{?>
    
            <div class="col-12">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>Forgot Passward</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" name="submit" class="btn float-right submit_btn">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="signup.php">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
else if($sucess==1)
{?>
 <div class="col-12">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>OTP Authentication</h3>
                            <h4 style="color: white;">Check Your E-mail</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="input-group form-group">
                                    <input type="text" name="otp" class="form-control" placeholder="Enter OTP" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" name="submit_otp" class="btn float-right submit_btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


<?php
}
else if($sucess==2)
{


?>
 <div class="col-12">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>Reset Password</h3>
                            
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">

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
                                    <input type="submit" value="Reset" name="submit_pass" class="btn float-right submit_btn">
                                </div>
                            </form>
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
}?>
</body>

















</html>