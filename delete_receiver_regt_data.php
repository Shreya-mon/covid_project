<?php include_once("connection.php"); ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `receiver_db` WHERE `id` = '".$_REQUEST['id']."'");
	//$qry = mysqli_query($con, "UPDATE `users` SET `isDeleted` = 'inactive' WHERE `id` = ".$_REQUEST['id']);

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_receiver_regt_data.php');
	} else {
		echo "Failed";
	}

?>