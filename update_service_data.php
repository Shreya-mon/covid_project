<?php
include("connection.php");
?>
<?php
$qry = mysqli_query($link, "UPDATE `service` SET `name`='".$_REQUEST['name']."' WHERE `service_id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `service` SET `description`='".$_REQUEST['description']."' WHERE `service_id`='".$_REQUEST['id']."'");
if ($qry) {
		// echo "successfully Deleted";
		header('location: display_service.php');
	} else {
		echo "Failed";
	}

?>
