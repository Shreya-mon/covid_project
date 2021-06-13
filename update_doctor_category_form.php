<?php include_once ("connection.php"); // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `doctor_category` WHERE `cat_id` = '".$_REQUEST['cat_id']."'");
		$row = mysqli_fetch_array($qry);
		
?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<center>
	<h1>Updation Form of Doctor Category</h1>
	<a href="menu.html">Back to Menu</a></center>
	<br><br>
	<form action="update_doctor_category.php" method="post" name="insert_frm">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
						<form action="update_doctor_category.php" method="post">
		 <input type="hidden" name="cat_id" value="<?=$row['cat_id']?>"><br><br>
		Doctor Category name:<input type="text" name="category_name" value="<?=$row['category_name']?>"><br><br>
		

		<input type="submit" value="Update">
	
						


					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>



