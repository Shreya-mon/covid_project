<?php include_once "connection.php"; ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `service` WHERE `service_id` = '".$_REQUEST['id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_service.php');
	} else {
		echo "Failed";
	}

?>