<?php
include("connection.php");
?>
<?php 
	$qry = mysqli_query($link, "SELECT * FROM `service` WHERE `service_id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<center>
	<h1>Update Records of Service</h1>
	<a href="display_service.php">Back to Display Records of service</a></center>
</center>
<br>
<div class="div">
	<form action="update_service_data.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
						<input type="hidden" name="id" value="<?=$row['service_id']?>"><br><br>
						<label>Service Name : </label><input type="text" name="name" value="<?=$row['name']?>"><br><br>
						<label>Service Description : </label><input type="text" name="description" value="<?=$row['description']?>"><br><br>
						<center><input type="submit" value="Update"></center>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>
