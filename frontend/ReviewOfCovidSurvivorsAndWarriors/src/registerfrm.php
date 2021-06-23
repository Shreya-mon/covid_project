<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="../css/registerfrm.css?V=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/all.css">
</head>
<body>
	<a href="reviews.php" class="previous"><i class="arrow left"></i></a>
	<?php
		if(isset($_POST['submit'])){
			extract($_POST);
			if($newpass != $conpass){
				$error[]='Passwords do not match.';
			}
			if($conpass == ''){
				$error[]='Please confirm the password.';
			}

			$sql="SELECT * FROM `register_db` WHERE `email`='$email'";
			$res = mysqli_query($link, $sql);
			if(mysqli_num_rows($res)>0){
				$row = mysqli_fetch_assoc($res);
				if($email == $row['email']){
					$error[]='Email Already Exists.'; 
				}
			}
			if(!isset($error)){
				$result = mysqli_query($link,"INSERT INTO `register_db`(`id`,`user_type`,`uname`,`email`,`n_password`,`con_password`) VALUES('','".$_REQUEST['type']."',
				'".$_REQUEST['name']."','".$_REQUEST['email']."','".base64_encode($newpass)."','".$_REQUEST['conpass']."')");
				if($result){
					$done=2;
				}
				else{
					$error[]='Failed: Something went wrong';
				}
			}
		}
	?>
	<div class="col-sm-4">
		<?php
			if(isset($error)){
				foreach($error as $error)
				{
					echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
				}
			}
		?>
	</div>
	<div class="col-sm-4">
	<?php
		if(isset($done)){
	?>
	<div class="msg">Share Your Experience</div>
	<div class="successmsg"><span style="font-size:100px;margin-left:3vmin;">&#9989;</span><br><br><br>
			You have registered successfully.<br><br><a href="loginfrm.php" class="login-btn" style="color:#fff;">Login</a>
	</div><?php } else{ ?>
   <form action="#" method="post">	
	<div class="form-box">
		<h1>Register Here</h1>
		<div class="choice">
				<span class="details" id="field1">Are You a COVID Warrior or Survivor?</span><br><br>
				<input type="radio" name="type" checked value="warrior"><span class="type">COVID Warrior</span>
				<input type="radio" name="type" value="survivor"><span class="type">COVID Survivor</span>
		</div>
		<div class="input-box">
			<input type="text" name="name" placeholder="Full name" required>
		</div>
		<div class="input-box">
			<i class="fa fa-envelope"></i>
			<input type="email" name="email" placeholder="Email Id" required>
		</div>
		<div class="input-box">
			<i class="fa fa-key"></i>
			<input type="password" name="newpass" placeholder="New Password" id="myInput" required>
			<span class="eye" onclick="myfunction()">
				<i id="hide1" class="fa fa-eye"></i>
				<i id="hide2" class="fa fa-eye-slash"></i>
			</span>
		</div>
		<div class="input-box">
			<i class="fa fa-key"></i>
			<input type="password" name="conpass" placeholder="Confirm Password" id="myInput1" required>
			<span class="eye" onclick="myfunction1()">
				<i id="hide3" class="fa fa-eye"></i>
				<i id="hide4" class="fa fa-eye-slash"></i>
			</span>
		</div>
		<input type="submit" name="submit" class="register-btn" value="REGISTER">
		<div class="login">Already Registered?
			<a href="loginfrm.php" class="button">Login</a>
		</div>
	</div>
	<?php }?>
  </form>
</div>

	<script type="text/javascript">
		function myfunction(){
			var x = document.getElementById("myInput");
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
			var x = document.getElementById("myInput1");
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


</body>
</html>