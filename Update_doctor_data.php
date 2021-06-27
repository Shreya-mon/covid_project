<?php // Update data query processing
include_once("connection.php");  
?>
<?php
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `id`='".$_REQUEST['id']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `cat_id`='".$_REQUEST['cat_id']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `dname`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `phno`='".$_REQUEST['phone_number']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `doctor_db` SET `email`='".$_REQUEST['email']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `doctor_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_db` SET `doctors_additional_info`='".$_REQUEST['doctor_additional_info']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry2) {
		// echo "successfully Deleted";
		header('location: display_doctor_data.php');
	} else {
		echo "Failed";
	}

?>
