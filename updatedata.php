<?php // Update data query processing
include_once("connection1.php");  
?>
<?php
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `hid`='".$_REQUEST['id']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `hname`='".$_REQUEST['name']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `htype`='".$_REQUEST['type']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `bed_capacity`='".$_REQUEST['bed_capacity']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `bed_available`='".$_REQUEST['bed_availability']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `phno`='".$_REQUEST['phone_number']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($con, "UPDATE `hospital_db` SET `email`='".$_REQUEST['email']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($con, "UPDATE `hospital_db` SET `address`='".$_REQUEST['address']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `district`='".$_REQUEST['district']."' WHERE `hid`='".$_REQUEST['id']."'");
$qry = mysqli_query($con, "UPDATE `hospital_db` SET `additional_info`='".$_REQUEST['hospital_additional_info']."' WHERE `hid`='".$_REQUEST['id']."'");
if ($qry2) {
		// echo "successfully Deleted";
		header('location: display.php');
	} else {
		echo "Failed";
	}

?>
