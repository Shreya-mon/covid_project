<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<a href="reviews.php" class="previous"><i class="arrow left"></i></a>
	<div class="container">
		<div class="title">
			You have been registered successfully.<br>
            Now Login
		</div><br><br>
		<form action="#">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Email ID:</span>
					<input type="email" name="email" placeholder="Enter your Email ID" required class="input">
				</div>
				<div class="input-box">
					<span class="details">New Password:</span>
					<input type="password" name="password" placeholder="Enter New Password" required class="input">
                </div>
			</div>
			<div class="button">
				<input type="submit" name="submit" value="Login">
			</div>
		</form>
	</div>

</body>
</html>