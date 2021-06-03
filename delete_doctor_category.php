<?php include_once("connection.php"); ?>

<?php  // For deleting record
	
	
	$qry = mysqli_query($link, "DELETE FROM `doctor_category` WHERE `cat_id` = '".$_REQUEST['cat_id']."'");
	

	if ($qry) {
		// echo "successfully Deleted";
		header('location:display_doctor_catergory.php');
	} else {
		echo "Failed";
	}

?>