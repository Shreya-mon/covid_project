<?php // Update data query processing
include_once("connection.php");  
?>
<?php
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `shid`='".$_REQUEST['shid']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `shname`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `bed_capacity`='".$_REQUEST['bed_capacity']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `bed_available`='".$_REQUEST['bed_availability']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `phno`='".$_REQUEST['phone_number']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `safehome_db` SET `email`='".$_REQUEST['email']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `safehome_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `safehome_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry2) {
		// echo "successfully Deleted";
		header('location: display_safehome_data.php');
	} else {
		echo "Failed";
	}

?>