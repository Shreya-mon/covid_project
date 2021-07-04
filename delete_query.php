<?php include_once "connection.php"; ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `query_db` WHERE `id` = '".$_REQUEST['id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_query.php');
	} else {
		echo "Failed";
	}

?>