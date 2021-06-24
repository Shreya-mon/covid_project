<?php
include("connection.php");

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$rating = $_POST["rating"];

		$sql = "INSERT INTO `feedback_db` (`id`,`name`,`address`,`email`,`phno`,`rating`,`description`) VALUES ('','".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['email']."','".$_REQUEST['phno']."', '$rating','".$_REQUEST['description']."')";
		$qry = mysqli_query($link, $sql);

        if($qry){
            echo "<h3 align='center'> Record inserted successfully. </h3>";
            echo "<a href='help.php'>Back</a>";
        }
	}
?>