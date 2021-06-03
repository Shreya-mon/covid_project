<?php
include("connection.php");
?>
<?php //insert data query processing
	echo '<a href="Insert_doctors_data.php">Back</a>';
	$sql = "INSERT INTO `doctor_db`(`id`,`cat_id`,`dname`,`phno`,`email`,`address`,`location`,`doctors_additional_info`) 
						  VALUES('".$_REQUEST['id']."',
						         '".$_REQUEST['cat_id']."',
								 '".$_REQUEST['name']."',
								 '".$_REQUEST['phone_number']."',
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['address']."',
								 '".$_REQUEST['location']."',
								 '".$_REQUEST['doctor_additional_info']."')";
	mysqli_query($link, $sql);
	echo '<h3> Record inserted successfully. </h3>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<a href="display_doctor_data.php">Click here to display records</a>';

?>