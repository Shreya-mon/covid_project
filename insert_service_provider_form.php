
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Insert Records of Service Providers</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="insert_service_providers.php" method="post" name="insert_frm">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
						Service Id :
							<select name="service_id">
							<?php

								include("connection.php");

								$qry = mysqli_query($link, "SELECT * FROM `service`");

								while($row1 = mysqli_fetch_array($qry)) {
								// print_r($row1);
							?>
							<option value="<?=$row1['service_id']?>"><?=$row1['name']?></option>
							<?php
								}

							?>
							</select><br><br>
						Service Provider Name : <input type="text" name="name" placeholder="Name"><br><br>
						
						Email : <input type="email" name="email" placeholder="E-mail"><br><br>
						
						Contact : <input type="text" name="contact" placeholder="Contact"><br><br>
						District : <input type="text" name="district" placeholder="District"><br><br>
						
						Address : <input type="text" name="address" placeholder="Address"><br><br>
						
						Description : <input type="text" name="description" placeholder="Description"><br><br>
						<center><input type="submit" value="Submit"></center>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



