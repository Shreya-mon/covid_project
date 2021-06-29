<?php  // Display service provider data 
include("connection.php");?>
<?php
	
	$sql = "INSERT INTO `volunteer_db`(`id`,`name`,`user_type`,`address`,`district`,`email`,`phno`,`proof`) VALUES('',
								 '".$_REQUEST['nameOfvolunteer']."','".$_REQUEST['person']."','".$_REQUEST['addressOfvolunteer']."','".$_REQUEST['dist']."','".$_REQUEST['emailOfvolunteer']."',
								 '".$_REQUEST['phoneOfvolunteer']."','".$_REQUEST['certificateOfvolunteer']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="meal and childcare.php">Back</a><br><br>
	
