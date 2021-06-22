<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `hospital_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
		$type = isset($row['htype']) ? $row['htype']:'';
?>










<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Insert Records of COVID Hospital</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="updatedata.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
		<input type="hidden" name="id" value="<?=$row['id']?>"><br><br>
		Hospital ID: <input type="text" name="hid" value="<?=$row['hid']?>"><br><br>
		Hospital name:<input type="text" name="name" value="<?=$row['hname']?>"><br><br>
		<lable>Hospital type:</lable>
		<input type="radio" name="type" value="Government Hospital"<?php if($type == 'Government Hospital'){echo "checked";}?>/>
				Government Hospital<br>
		<input type="radio" name="type" class="type" value="Govt. Requisitioned Pvt. Hospital"<?php if($type == 'Govt. Requisitioned Pvt. Hospital'){echo "checked";}?>/>Govt. Requisitioned Pvt. Hospital<br>
		<input type="radio" name="type" class="type" value="Private Hospital"<?php if($type == 'Private Hospital'){echo "checked";}?>/>				Private Hospital
		<br><br>
		Hospital Bed Capacity: <input type="text" name="bed_capacity" value="<?=$row['bed_capacity']?>"><br><br>
		Hospital Bed Availability: <input type="text" name="bed_availability" value="<?=$row['bed_available']?>"><br><br>
		Phone number: <input type="text" name="phone_number" value="<?=$row['phno']?>"><br><br>
		Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
		District: <input type="text" name="district" value="<?=$row['district']?>"><br><br>
		Hospital additional information: <input type="text" name="hospital_additional_info" value="<?=$row['additional_info']?>"><br>
		<br>

		<input type="submit" value="Update">
	
						
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



