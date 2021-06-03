<?php include_once ("connection.php"); // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `doctor_category` WHERE `cat_id` = '".$_REQUEST['cat_id']."'");
		$row = mysqli_fetch_array($qry);
		
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update_doctor_category.php" method="post">
		 <input type="hidden" name="cat_id" value="<?=$row['cat_id']?>"><br><br>
		Doctor Category name:<input type="text" name="category_name" value="<?=$row['category_name']?>"><br><br>
		

		<input type="submit" value="Update">
	</form>
</body>
</html>