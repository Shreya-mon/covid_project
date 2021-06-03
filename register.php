<?php
include("connection.php");
?>


<?php
$sql = "INSERT INTO `admin_details`(`name`, `id`, `email`, `password`) VALUES('".$_REQUEST['name']."',
								 '".$_REQUEST['id']."',
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['pass']."')";
	mysqli_query($link, $sql);
	echo '<h3> Registration successful. </h3><br><br><br>';
	echo '<a href="menu.html">Click Here To Go To Menu!!</a><br><br><br>';
?>