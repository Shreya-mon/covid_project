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
	
	$sql = "INSERT INTO `doctor_db`(`id`,`cat_id`,`dname`,`phno`,`email`,`address`,`location`,`doctors_additional_info`) 
						  VALUES('".$_REQUEST['id']."',
						         '".$_REQUEST['cat_id']."',
								 '".$_REQUEST['name']."',
								 '".$_REQUEST['phone_number']."',
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['address']."',
								 '".$_REQUEST['location']."',
								 '".$_REQUEST['doctor_additional_info']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> Record inserted successfully. </h3>';
	<br>;
	<br>;
	<br>;
	<a href="Insert_doctors_data.php">Back</a>
	<br>;
	<br>;
	<br>;
	<a href="display_doctor_data.php">Click here to display records</a>';

