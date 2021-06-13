



<!DOCTYPE html>
<!--Insert data into doctor_consultation database-->
<html>
<head>
	<link rel="stylesheet" href="style4.css">
</head>
<body>
	<center>
	<h1>Insert Records to Doctor Consultation</h1><br>
	<a href="menu.html">Back to Menu</a>
	</center>
	<br><br><br>
	<form action="insert_data.php" method="post" name="insert_frm">
		<label>ID : </label><input type="text" name="id" placeholder="ID"><br><br>
		<label>Category ID : 
		<select name="cat_id">
			<?php

				include("connection.php");

				$qry = mysqli_query($link, "SELECT * FROM `doctor_category`");

				while($row = mysqli_fetch_array($qry)) {
					// print_r($row);
					?>
						<option value="<?=$row['cat_id']?>"><?=$row['category_name']?></option>
					<?php
				}
			?>
		</select><br><br>
		<label>Doctor's Name : </label><input type="text" name="name" placeholder="Name"><br><br>
		<label>Doctor's Contact Number : </label><input type="text" name="phone_number" placeholder="Contact Number"><br><br>
		<label>Email-id : </label><input type="email" name="email" placeholder="Email"><br><br>
		<label>Address : </label><input type="text" name="address" placeholder="Address"><br><br>
		<label>Location : </label><input type="text" name="location" placeholder="Location"><br><br>
		<label>Doctor's additional information : </label><input type="text" name="doctor_additional_info" placeholder="Add more information">
		<br><br><br>
		<center><input type="submit" value="Submit"></center>
	</form>
</body>
</html>



















