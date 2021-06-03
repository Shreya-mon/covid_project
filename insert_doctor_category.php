<?php
include("connection.php");
?>
<?php
	echo '<a href="insert_doctor_category.html">Back</a>';
	$sql = "INSERT INTO `doctor_category`(`cat_id`,`category_name`) VALUES('".$_REQUEST['cat_id']."',
								 '".$_REQUEST['cat_name']."')";
	mysqli_query($link, $sql);
	echo '<h3> Record inserted successfully. </h3>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<a href="display_doctor_catergory.php">Click here to display records</a>';

?>