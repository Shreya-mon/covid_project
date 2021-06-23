<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="../css/loginfrm.css?V=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/all.css">
</head>
<body>
	<a href="reviews.php" class="previous"><i class="arrow left"></i></a>
   <form action="login-acc.php" method="post">	
	<div class="form-box">
		<h1>Login Here</h1>
		<div class="input-box">
			<i class="fa fa-envelope"></i>
			<input type="email" name="email" placeholder="Email Id" required>
		</div>
		<div class="input-box">
			<i class="fa fa-key"></i>
			<input type="password" name="password" placeholder="Password" id="myInput" required>
			<span class="eye" onclick="myfunction()">
				<i id="hide1" class="fa fa-eye"></i>
				<i id="hide2" class="fa fa-eye-slash"></i>
			</span>
		</div>
		<input type="submit" name="submit" class="register-btn" value="LOGIN">
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
	</script>


</body>
</html>
<?php
if(isset($_REQUEST['msg'])){
echo "<p class='logout'>".$_REQUEST['msg']."</p>";	
}
?>