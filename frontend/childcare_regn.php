<?php  // Display service provider data 
include("connection.php");?>
<?php
	
	$sql = "INSERT INTO `childcareprovider_db`(`id`,`name`,`address`,`district`,`phno`,`proof`) VALUES('',
								 '".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['district']."',
								 '".$_REQUEST['phno']."','".$_REQUEST['proof']."')";
	mysqli_query($link, $sql);?>
	<h3 align="center"> DATA RECORDED SUCCESSFULLY!!!</h3>
	
	<a href="meal and childcare.php">Back</a><br><br>
	