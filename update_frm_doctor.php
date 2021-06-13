<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `doctor_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>








<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Updation Form of Doctor Details</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="Update_doctor_data.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
						
		ID: <input type="text" name="id" value="<?=$row['id']?>"><br><br>
		Category ID:
		
		
		<select name="cat_id">
			<?php

				include("connection.php");

				$qry = mysqli_query($link, "SELECT * FROM `doctor_category`");

				while($row1 = mysqli_fetch_array($qry)) {
					// print_r($row1);
					?>
						<option value="<?=$row1['cat_id']?>"><?=$row1['category_name']?></option>
					<?php
				}

			?>
		</select>
		
		<br><br>
		Doctor's name:<input type="text" name="name" value="<?=$row['dname']?>"><br><br>
		Doctor's Contact Number: <input type="text" name="phone_number" value="<?=$row['phno']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
		Location: <input type="text" name="location" value="<?=$row['location']?>"><br><br>
		Doctor's additional information: <input type="text" name="doctor_additional_info" value="<?=$row['doctors_additional_info']?>"><br>
		<br>

		<input type="submit" value="Update">
	</form>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



