<?php
include("connection.php");
?>
<!DOCTYPE html>
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
	
	$sql = "INSERT INTO `ngo_help_db`( `name`, `address`, `district`, `ph_no`, `file`, `description`, `category`)
						  VALUES('".$_REQUEST['firstNameOfInd']."',
								 '".$_REQUEST['addressOfInd']."',
                                 '".$_REQUEST['dist']."',
								 '".$_REQUEST['phoneNoOfInd']."',
								 '".$_REQUEST['certificateOfInd']."',
								 
                                 '".$_REQUEST['description']."',
                                 '".$_REQUEST['helpingCategoriesOfInd']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> Record inserted successfully. </h3>
	<br>
	<br>
	<br>
	<a href="ngo-charity.php">Back</a>
	<br>
	<br>
	<br>
	<a href="display_ngo_help_form_data.php">Click here to display records</a>

