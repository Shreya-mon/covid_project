<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `volunteer_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
        $type = isset($row['user_type']) ? $row['user_type']:'';
        $dist = isset($row['district']) ? $row['district']:'';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style2.css">
</head>
<body>
	<center>
	<h1>Update Your Record As Healthcare Volunteer</h1>
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
		Applying as a:&nbsp;Individual person <input type="radio" name="person" value="Individual person"<?php if($type == 'Individual person'){echo "checked";} ?>> 
        Team <input type="radio" name="person" value="Team" <?php if($type == 'Team'){echo "checked";} ?>>
    
		Address: <input type="text" name="address" value="<?=$row['address']?>"><br><br>
        District:  <select name="district">
                                <option value="Alipurduar" <?php if($dist == 'Alipurduar'){echo "selected";} ?>>Alipurduar</option>
                                <option value="Bankura" <?php if($dist == "Bankura"){echo "selected";} ?>>Bankura</option>
                                <option value="Paschim Bardhaman" <?php if($dist == "Paschim Bardhaman"){echo "selected";} ?>>Paschim Bardhaman</option>
                                <option value="Purba Bardhaman" <?php if($dist == "Purba Bardhaman"){echo "selected";} ?>>Purba Bardhaman</option>
                                <option value="Birbhum" <?php if($dist == "Birbhum"){echo "selected";} ?>>Birbhum</option>
                                <option value="Cooch Behar" <?php if($dist == "Cooch Behar"){echo "selected";} ?>>Cooch Behar</option>
                                <option value="Dakshin Dinajpur" <?php if($dist == "Dakshin Dinajpur"){echo "selected";} ?>>Dakshin Dinajpur</option>
                                <option value="Darjeeling" <?php if($dist == "Darjeeling"){echo "selected";} ?>>Darjeeling</option>
                                <option value="Hooghly" <?php if($dist == "Hooghly"){echo "selected";} ?>>Hooghly</option>
                                <option value="Howrah" <?php if($dist == "Howrah"){echo "selected";} ?>>Howrah</option>
                                <option value="Jalpaiguri" <?php if($dist == "Jalpaiguri"){echo "selected";} ?>>Jalpaiguri</option>
                                <option value="Jhargram" <?php if($dist == "Jhargram"){echo "selected";} ?>>Jhargram</option>
                                <option value="Kalimpong" <?php if($dist == "Kalimpong"){echo "selected";} ?>>Kalimpong</option>
                                <option value="Kolkata" <?php if($dist == "Kolkata"){echo "selected";} ?>>Kolkata</option>
                                <option value="Maldah" <?php if($dist == "Maldah"){echo "selected";} ?>>Maldah</option>
                                <option value="Murshidabad" <?php if($dist == "Murshidabad"){echo "selected";} ?>>Murshidabad</option>
                                <option value="Nadia" <?php if($dist == "Nadia"){echo "selected";} ?>>Nadia</option>
                                <option value="North 24 Parganas" <?php if($dist == "North 24 Parganas"){echo "selected";} ?>>North 24 Parganas</option>
                                <option value="Paschim Medinipur" <?php if($dist == "Paschim Medinipur"){echo "selected";} ?>>Paschim Medinipur</option>
                                <option value="Purba Medinipur" <?php if($dist == "Purba Medinipur"){echo "selected";} ?>>Purba Medinipur</option>
                                <option value="Purulia" <?php if($dist == "Purulia"){echo "selected";} ?>>Purulia</option>
                                <option value="South 24 Parganas" <?php if($dist == "South 24 Parganas"){echo "selected";} ?>>South 24 Parganas</option>
                                <option value="Uttar Dinajpur" <?php if($dist == "Uttar Dinajpur"){echo "selected";} ?>>Uttar Dinajpur</option>
                            </select><br><br>
        Phone number: <input type="text" name="phno" value="<?=$row['phno']?>"><br><br>
       
		
		Certificate as a proof: <input type="file" name="proof" value="<?=$row['proof']?>"><br><br>

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
$qry = mysqli_query($link, "UPDATE `volunteer_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `volunteer_db` SET `user_type`='".$_REQUEST['person']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `volunteer_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `volunteer_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `volunteer_db` SET `phno`='".$_REQUEST['phno']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `volunteer_db` SET `proof`='".$_REQUEST['proof']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry) {
		// echo "successfully Deleted";
		header('location: usertable.php');
	} else {
		echo "Failed";
	}
}

?>