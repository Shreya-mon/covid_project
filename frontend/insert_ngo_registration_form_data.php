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
	$sql = " INSERT INTO `ngo_registration`( `name`, `address`, `district`, `ph_no`,`file`, `category`)
						  VALUES('".$_REQUEST['nameOfNGO']."',
								 '".$_REQUEST['addressOfNGO']."',
                                 '".$_REQUEST['dist']."',
								 '".$_REQUEST['phoneNoOfNGO']."',
								 '".$_REQUEST['certificateOfNGO']."',
								 
                                 '".$_REQUEST['helpingCategoriesOfNGO']."')";
	mysqli_query($link, $sql);
	

								//echo $tmp = $_FILES["certificateOfNGO"]["tmp_name"];
 								$path = "upload_file/".$_FILES["certificateOfNGO"]["name"];
								$temp = $_FILES["certificateOfNGO"]["tmp_name"];
								move_uploaded_file($temp, $path);
	?>
	<h3 align="center"> Record inserted successfully. </h3>';
	<br>;
	<br>;
	<br>;
	<a href="ngo-charity.php">Back</a>
	<br>;
	<br>;
	<br>;
	<a href="display_ngo_registration_form_data.php">Click here to display records</a>';

