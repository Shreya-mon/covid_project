<?php  // Display service provider data 
include("connection.php");?>
<?php
	
	$sql = "INSERT INTO `mealprovider_db`(`id`,`name`,`address`,`district`,`email`,`phno`,`proof`) VALUES('',
								 '".$_REQUEST['nameOfNGO']."','".$_REQUEST['addressOfNGO']."','".$_REQUEST['dist']."','".$_REQUEST['email']."',
								 '".$_REQUEST['phoneNoOfNGO']."','".$_REQUEST['certificateOfNGO']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="meal and childcare.php">Back</a><br><br>
	
