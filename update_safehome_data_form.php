<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `safehome_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>










<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Update Records of Safehome</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="update_safehome_data.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
        <input type="hidden" name="id" value="<?=$row['id']?>"><br><br>
		Safehome ID: <input type="text" name="shid" value="<?=$row['shid']?>"><br><br>
		Safehome name:<input type="text" name="name" value="<?=$row['shname']?>"><br><br>
		Safehome Bed Capacity: <input type="text" name="bed_capacity" value="<?=$row['bed_capacity']?>"><br><br>
		Safehome Bed Availability: <input type="text" name="bed_availability" value="<?=$row['bed_available']?>"><br><br>
		Phone number: <input type="text" name="phone_number" value="<?=$row['phno']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
		District: <input type="text" name="district" value="<?=$row['district']?>"><br><br>

		<input type="submit" value="Update">
	
						
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>