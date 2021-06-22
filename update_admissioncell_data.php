<?php // Update data query processing
include_once("connection.php");  
?>
<?php
$qry = mysqli_query($link, "UPDATE `admission_cell_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `admission_cell_db` SET `phno`='".$_REQUEST['phone_number']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry) {
		// echo "successfully Deleted";
		header('location: display_admissioncell.php');
	} else {
		echo "Failed";
	}

?>
