<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `survivor_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style2.css">
</head>
<body>
	<center>
	<h1>Update Your Record As Warrior</h1>
	<a href="usertable.php">Back</a></center>
	<br><br>
	<form action="#" method="post">
		<div class='container'>
			<div class='window'>
				<div class='overlay'>
				</div>
				<div class='content'>
					<div class='input-fields'>
						<br>
        <input type="hidden" name="id" value="<?=$row['id']?>"><br><br>
		Name: <input type="text" name="name" value="<?=$row['name']?>"><br><br>
		Age:<input type="text" name="age" value="<?=$row['age']?>"><br><br>
		Profession: <input type="text" name="profession" value="<?=$row['profession']?>"><br><br>
		City: <input type="text" name="city" value="<?=$row['city']?>"><br><br>
        District: <input type="text" name="district" value="<?=$row['district']?>"><br><br>
		Share Your Experience: <br>
        <textarea name="experience" rows="5" name="experience"><?=$row['experience']?></textarea><br><br>
		Add A Title: <br>
        <textarea name="title" rows="5" name="title"><?=$row['title']?></textarea><br><br>
		Upload Video: <input type="file" name="video" value="<?=$row['video']?>"><br><br>
		

		<input type="submit" name= "submit" value="Update">
	
						
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `age`='".$_REQUEST['age']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `profession`='".$_REQUEST['profession']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `city`='".$_REQUEST['city']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `survivor_db` SET `experience`='".$_REQUEST['experience']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `survivor_db` SET `title`='".$_REQUEST['title']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `video`='".$_REQUEST['video']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry2) {
		// echo "successfully Deleted";
		header('location: usertable.php');
	} else {
		echo "Failed";
	}
}

?>