<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `doctor_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
</head>
<body>
	<h1> <center> Update records for Doctor Consultation</center></h1>
	<form action="Update_doctor_data.php" method="post">
		ID: <input type="text" name="id" value="<?=$row['id']?>"><br><br>
		Category ID: <input type="number" name="cat_id" value="<?=$row['cat_id']?>"><br><br>
		Doctor's name:<input type="text" name="name" value="<?=$row['dname']?>"><br><br>
		Doctor's Contact Number: <input type="text" name="phone_number" value="<?=$row['phno']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
		Location: <input type="text" name="location" value="<?=$row['location']?>"><br><br>
		Doctor's additional information: <input type="text" name="doctor_additional_info" value="<?=$row['doctors_additional_info']?>"><br>
		<br>

		<input type="submit" value="Update">
	</form>
</body>
</html>