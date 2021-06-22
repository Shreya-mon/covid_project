<?php  // Display service provider data 
include("../connection.php");?>
<?php
	
	$sql = "INSERT INTO `receiver_db`(`id`,`name`,`address`,`phone number`,`date of birth`,`gender`,`blood group`,`district`,`proof`) VALUES('','".$_REQUEST['name']."',
								 '".$_REQUEST['address']."','".$_REQUEST['phno']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."','".$_REQUEST['bgrp']."','".$_REQUEST['dist']."',
								 '".$_REQUEST['cert']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="bloodbank.php">Back</a><br><br>
	<a href="display_donor_db.php">Click here to display records</a>';