<?php
include("connection.php");
?>
<style type="text/css">
.heading{
	margin:2rem 2rem;
	font-size: 3vw;
	color: red;
}
.back{
	height: 100%;
    width: 100%;
    outline: none;
    margin-left: 3vmin;
    background: black;
    color: white;
    padding: 1rem 1rem;
    font-size: 25px;
    cursor: pointer;
    text-decoration: none;
}
.back:hover{
	background: transparent;
    color: black;
    border: 1px solid rgba(0, 0, 0, 0.1);
    font-weight: bold;
}
</style>
<?php
$qry = "SELECT * FROM `register_db` WHERE `email` = '".$_REQUEST['email']."'";
if($result=mysqli_query($link, $qry))
{
	$rowc = mysqli_num_rows($result);
	if($rowc == 1)
	{
		$qry1 = "SELECT * FROM `register_db` WHERE `email` = '".$_REQUEST['email']."' AND `con_password` = '".$_REQUEST['password']."'";
		if($result=mysqli_query($link, $qry1))
		{
			$rowc1 = mysqli_num_rows($result);
			if($rowc1 == 0)
			{
				echo "<h1 class='heading'>Incorrect password.</h1><br><br>";
	 			echo "<a href='loginfrm.php' class='back'>Try Again</a>";
			}
			else
			{
				$row = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['uname'];
				$_SESSION['email'] = $row['email'];
                if($row['user_type'] == 'warrior'){
                    header('Location:shareExperienceWarrior.php');
                }
				else{
                    header('Location:shareExperienceSurvivor.php');
                }  
			}
		}
	}
	else
	{
		echo "<h1 class='heading'>Email id mismatched!!!</h1><br><br>";
		echo "<a href='loginfrm.php' class='back'>Try Again</a>";
	}
}
?>