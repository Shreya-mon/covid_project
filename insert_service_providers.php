<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	body	
{
	background-image: url("https://us.123rf.com/450wm/studiobarcelona/studiobarcelona2002/studiobarcelona200200083/140963977-dark-blue-gradient-background-vector-illustration-.jpg?ver=6");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
}
h3{ color: floralwhite; font-size: 38px;}
a{
color: forestgreen;
font-size: 31px;
align-items: center;
}
	</style>


</head>
<body>

</body>




<?php
include("connection.php");
?>


<?php
	$sql = "INSERT INTO `service_providers`(`service_id`,`name`,`contact`,`email`,`description`,`district`,`address`) 
						  VALUES('".$_REQUEST['service_id']."',
						         '".$_REQUEST['name']."',
								 '".$_REQUEST['contact']."',
								 
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['description']."',
								 '".$_REQUEST['district']."',
								 '".$_REQUEST['address']."')";
	mysqli_query($link, $sql);
	?>
	<h3 align="center"> Record inserted successfully. </h3>
	<br>
	<br>
	<br>
	<a href="insert_service_provider_form.php">Back</a>
	<br>
	<br>
	<br>
	<a href="display_service_provider.php">Click here to display records</a>
