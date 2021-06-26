<?php include_once "connection.php"; ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `ngo_help_db` WHERE `id` = '".$_REQUEST['id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_ngo_help_form_data.php');
	} else {
		echo "Failed";
	}

?>