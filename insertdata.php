<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
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

<?php //insert data query processing
	echo '';
	 $sql = "INSERT INTO `hospital_db`(`hid`,`hname`,`htype`,`bed_capacity`,`bed_available`,`phno`,`email`,`address`,`district`,`additional_info`) VALUES('".$_REQUEST['id']."',
								 '".$_REQUEST['name']."',
								 '".$_REQUEST['type']."',
								 '".$_REQUEST['bed_capacity']."',
								 '".$_REQUEST['bed_availability']."',
								 '".$_REQUEST['phone_number']."',
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['address']."',
								 '".$_REQUEST['district']."',
								 '".$_REQUEST['hospital_additional_info']."')";
								 
	mysqli_query($link, $sql);?>

	<h3 align="center"> DATA RECORDED SUCESSFULLY ! ! </h3>
	<br>
	<br>
	<a href="insert_hospital_data.html">Back</a>
	<br>
	<a href="display.php">Click here to display records</a>
</html>
