<!DOCTYPE html>
<!--Insert data into doctor_consultation database-->
<html>
<head>
	<title>Insert records</title> 
	<style type="text/css">
		body{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<a href="menu.html">Back</a><br><br>
	<h1> <center> Insert records for Doctor Consultation</center></h1>
	<form action="insert_data.php" method="post" name="insert_frm">
		ID: <input type="text" name="id" placeholder="ID"><br><br>



		Category ID: 

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
		</select>
		
		
		<br><br>




		Doctor's Name: <input type="text" name="name" placeholder="Name"><br><br>
		Doctor's Contact Number: <input type="text" name="phone_number" placeholder="Contact Number"><br><br>
		Email: <input type="email" name="email" placeholder="Email"><br><br>
		Address: <input type="text" name="address" placeholder="Address"><br><br>
		Location: <input type="text" name="location" placeholder="Location"><br><br>
	Doctor's additional information: <input type="text" name="doctor_additional_info" placeholder="Add more information"><br><br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>
