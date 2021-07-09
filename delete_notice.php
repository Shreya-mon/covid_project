<?php include_once "connection.php"; ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `notice_board` WHERE `id` = '".$_REQUEST['id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_notice.php');
	} else {
		echo "Failed";
	}

?>