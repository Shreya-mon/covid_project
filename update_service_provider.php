<?php // Update data query processing
include_once("connection.php");  
?>
<?php
$qry = mysqli_query($link, "UPDATE `service_providers` SET `id`='".$_REQUEST['id']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `service_providers` SET `service_id`='".$_REQUEST['service_id']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `service_providers` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `service_providers` SET `contact`='".$_REQUEST['contact']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `service_providers` SET `email`='".$_REQUEST['email']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `service_providers` SET `description`='".$_REQUEST['description']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `service_providers` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `service_providers` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");

if ($qry2) {
		
		header('location: display_service_provider.php');
	} else {
		echo "Failed";
	}

?>
