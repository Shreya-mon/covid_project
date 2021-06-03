<?php include_once("connection1.php"); ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($con, "DELETE FROM `hospital_db` WHERE `hid` = '".$_REQUEST['id']."'");
	//$qry = mysqli_query($con, "UPDATE `users` SET `isDeleted` = 'inactive' WHERE `id` = ".$_REQUEST['id']);

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display.php');
	} else {
		echo "Failed";
	}

?>