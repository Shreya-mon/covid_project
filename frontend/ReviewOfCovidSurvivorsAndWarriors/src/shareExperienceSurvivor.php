<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Experience</title>
    <link rel="stylesheet" href="../css/shareExperienceSurvivor.css">
</head>
<body>
	<?php
		$email= $_SESSION['email'];
		if(isset($_POST['submit'])){
			$result = mysqli_query($link,"INSERT INTO `survivor_db`(`id`,`email`,`age`,`profession`,`city`,`district`,`experience`,`title`,`video`) VALUES('','".$email."','".$_REQUEST['age']."',
				'".$_REQUEST['profession']."','".$_REQUEST['city']."','".$_REQUEST['district']."','".$_REQUEST['experience']."','".$_REQUEST['title']."','".$_REQUEST['video']."')");
				if($result){
					$done=2;
				}
				else{
					$error[]='Failed: Something went wrong';
				}
		}
	?>
    <header>
        <a href="logout.php"class="logout">LOG OUT</a>
    </header>
	<div class="col-sm-4">
		<?php
			if(isset($error)){
				foreach($error as $error)
				{
					echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
				}
			}
		?>
	</div>
	<div class="col-sm-4">
	<?php
		if(isset($done)){
	?>
	<div class="msg">Thanks For Sharing Your Experience</div>
	<div class="successmsg"><span style="font-size:100px;margin-left:3vmin;">&#9989;</span><br><br><br>
			Your experience has been submitted successfully.<br><br>
	</div><?php } else{ ?>

    <h1 class="heading"> Welcome <?php echo $_SESSION['name']; ?></h1>
    <form action="#" method="post">	
	<div class="form-box">
		<h1>Share Your Experience</h1>
		<div class="input-box">
			<input type="text" name="age" placeholder="Your Age" required>
		</div>
		<div class="input-box">
			<input type="text" name="profession" placeholder="Your Profession" required>
		</div>
        <div class="input-box">
			<input type="text" name="city" placeholder="Your City" required>
		</div>
		<div class="input-box">
			<input type="text" name="district" placeholder="Your District" required>
	    </div>
		<div class="input-box input">
            <span class="details">Share Your Experience:</span><br><br>
			<textarea name="experience" rows="8" cols="40" required></textarea> 
		</div>
		<div class="input-box input">
            <span class="details">Add A Title:</span><br><br>
			<textarea name="title" required rows="5" cols="40"></textarea>
		</div>
        <div class="input-box input">
			<span class="details">Upload Video:</span><br><br>
			<input type="file" name="video" class="upload">
		</div>
		<input type="submit" name="submit" class="register-btn" value="SHARE">
	</div>
	<?php }?>
  </form>
  </div>
</body>
</html>