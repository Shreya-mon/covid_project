<?php
include("connection.php");
?>
<<!DOCTYPE html>
<html>
<head>
	<style>
		h3{ color: floralwhite; font-size: 38px;}

		body	
{
	background-image: url("https://us.123rf.com/450wm/studiobarcelona/studiobarcelona2002/studiobarcelona200200083/140963977-dark-blue-gradient-background-vector-illustration-.jpg?ver=6");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
}

a{
color: forestgreen;
font-size: 31px;
align-items: center;
}
	</style>
</head>
<body>

</body>
</html>
<?php //insert data query processing
	
	$sql = "INSERT INTO `service`(`name`,`description`) 
						  VALUES('".$_REQUEST['name']."',
								 '".$_REQUEST['description']."')";
	mysqli_query($link, $sql);?>

	<h3 align="center"> Record inserted successfully. </h3>
	<br>
	<br>
	<br>
	<a href="menu.html">Back</a>
	<br>
	<br>
	<br>
	
	<br>
	<br>
	
	<br>
	<br>
	<br>
	<a href="display_service.php">Click here to display records</a>
