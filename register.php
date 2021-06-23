<?php
include("connection.php");
?>
<style>
		body	
{
	background-image: url("https://www.leadquizzes.com/wp-content/uploads/2019/06/New-blog-graphic-16.jpg");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
}
a{
			color: forestgreen;
			font-size: 24px;
			text-align: center;
		}
		div{ color: black; font-size: 42px;}
</style>

<?php
$sql = "INSERT INTO `admin_details`(`id`,`name`,`email`,`password`) VALUES ('','".$_REQUEST['name']."',
								 
								 '".$_REQUEST['email']."',
								 '".$_REQUEST['pass']."')";
	mysqli_query($link, $sql);?>
	<div align="center"> Registration successful ! </div><br><br><br>
	<div align="center"><a href="menu.html">Click Here To Go To Menu!!</a></div><br><br><br>
