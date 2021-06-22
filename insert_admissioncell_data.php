<!DOCTYPE html>
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
	
	$sql = "INSERT INTO `admission_cell_db`(`id`,`district`,`phno`) VALUES('','".$_REQUEST['district']."',
								 '".$_REQUEST['phno']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="insert_admissioncell.html">Back</a><br><br>
	<a href="display_admissioncell.php">Click here to display records</a>';

</html>