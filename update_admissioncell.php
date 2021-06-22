<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `admission_cell_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Update Records of Admission Cell Helpdesk</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="update_admissioncell_data.php" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
		<input type="hidden" name="id" value="<?=$row['id']?>"><br><br>
        District: <input type="text" name="district" value="<?=$row['district']?>"><br><br>
		Phone number: <input type="text" name="phone_number" value="<?=$row['phno']?>"><br><br>
		<br>

		<input type="submit" value="Update">
	
						
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



