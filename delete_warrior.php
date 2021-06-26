<?php include_once "connection.php"; ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `warrior_db` WHERE `id` = '".$_REQUEST['id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_warrior.php');
	} else {
		echo "Failed";
	}

?>