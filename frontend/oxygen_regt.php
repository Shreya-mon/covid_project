<?php  // Display service provider data 
include("connection.php");?>

<?php
	
	$sql = "INSERT INTO `oxygen_db`(`id`,`name`,`application type`,`address`,`district`,`email`,`phone number`,`proof`) VALUES('','".$_REQUEST['name']."',
								 '".$_REQUEST['person']."','".$_REQUEST['address']."','".$_REQUEST['dist']."','".$_REQUEST['email']."','".$_REQUEST['phno']."',
								 '".$_REQUEST['cert']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="oxygen.html">Back</a><br><br>
	<a href="display_oxygen_db.php">Click here to display records</a>';