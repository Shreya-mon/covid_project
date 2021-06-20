<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="../css/registerfrm.css">
	<link rel="stylesheet" href="../css/all.css">
</head>
<body>
	<a href="reviews.php" class="previous"><i class="arrow left"></i></a>
   <form action="#" method="post">	
	<div class="form-box">
		<h1>Register Here</h1>
		<div class="choice">
				<span class="details" id="field1">Are You a COVID Warrior or Survivor?</span><br><br>
				<input type="radio" name="type" checked><span class="type">COVID Warrior</span>
				<input type="radio" name="type"><span class="type">COVID Survivor</span>
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
	</div>
  </form>

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