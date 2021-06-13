<?php include_once ("connection.php"); // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `service_providers` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
		//$type = isset($row['htype']) ? $row['htype']:'';
?>






<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Updation Form of Service Providers records</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="update_service_provider.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
						
		<label>ID : </label><input type="text" name="id" value="<?=$row['id']?>"><br><br>
		<label>Service Id : </label><input type="text" name="service_id" value="<?=$row['service_id']?>"><br><br>
	
		Name:<input type="text" name="name" value="<?=$row['name']?>"><br><br>
		
		
		Contact: <input type="text" name="contact" value="<?=$row['contact']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
		Description: <input type="text" name="description" value="<?=$row['description']?>"><br><br>
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
		
		<br>

		<input type="submit" value="Update">
	
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



