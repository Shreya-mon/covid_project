<?php // Update data query processing
include_once("connection.php");  
?>
<?php
$qry = mysqli_query($link, "UPDATE `doctor_category` SET `cat_id`='".$_REQUEST['cat_id']."' WHERE `cat_id`='".$_REQUEST['cat_id']."'");
$qry = mysqli_query($link, "UPDATE `doctor_category` SET `category_name`='".$_REQUEST['category_name']."' WHERE `cat_id`='".$_REQUEST['cat_id']."'");

if ($qry) {
		// echo "successfully Deleted";
		header('location: display_doctor_catergory.php');
	} else {
		echo "Failed";
	}


?>
