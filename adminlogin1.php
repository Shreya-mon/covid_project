<?php

include("connection.php");
session_start();
  ?>

<style>
	body	
{
	background-image: url("https://cdn.dribbble.com/users/725935/screenshots/3391014/dribble-login-illustration.png");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
}
a{
			color: forestgreen;
			font-size: 24px;
			text-align: center;
		}
		div{ 
				margin-top: 20vh;

			color: floralwhite; font-size: 42px;}
</style>

<?php
$email = $_POST['email'];
//$id = $_POST['id'];
$password = $_POST['pass'];

$sql ="SELECT * FROM `admin_details` WHERE `email` = '$email' AND `password` = '$password'";
$result = mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
	if($row['email']==$email && $row['password']==$password)
 		{  
    		echo "<div align='center'>Welcome ".$row['name']." to Admin Panel</div><br><br>";
    		echo "<div align='center'>";
    		echo '<a href="menu.html">Click Here To Go To Menu!!</a><br><br><br><br>';
			echo "</div>";
			// header('Location:menu.html');
		}


 	else {
		$_SESSION['error'] = "You are not an authourized user.";
		header('Location:admin.php');
	 	}
}
	
 	else {
		 $_SESSION['error'] = "You are not an authourized user.";
		header('Location:admin.php');
		}

?>