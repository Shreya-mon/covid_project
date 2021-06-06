<?php
include("connection.php");
?>
<?php //insert data query processing
	echo '<a href="insert_hospital_data.html">Back</a>';
	echo $sql = "INSERT INTO `hospital_db`(`hid`,`hname`,`htype`,`bed_capacity`,`bed_available`,`phno`,`email`,`address`,`district`,`additional_info`) VALUES('".$_REQUEST['id']."',
								 '".$_REQUEST['name']."',
								 '".$_REQUEST['type']."',
								 '".$_REQUEST['bed_capacity']."',
								 '".$_REQUEST['bed_availability']."',
								 '".$_REQUEST['phone_number']."',
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['address']."',
								 '".$_REQUEST['district']."',
								 '".$_REQUEST['hospital_additional_info']."')";
								 
	mysqli_query($link, $sql);
	echo '<h3> Record inserted successfully. </h3>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<a href="display.php">Click here to display records</a>';

?>