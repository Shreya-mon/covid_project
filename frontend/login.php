<?php
include("connection.php");
if(isset($_POST['submit'])){
session_start();
$_SESSION['rememail'] = $_REQUEST['email'];
$_SESSION['rempass'] = $_REQUEST['password'];
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
				$_SESSION['errorPass'] = "Incorrect Password!";
				header('Location:sign.php');
                
			}
			else
			{
				$row = mysqli_fetch_assoc($result);
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['uname'];
				$_SESSION['email'] = $row['email'];
				if(!empty($_REQUEST["remember"]))
				{
					setcookie("email",$_REQUEST['email'],time()+(10*365*24*60*60));
					setcookie("password",$_REQUEST['password'],time()+(10*365*24*60*60));
				}
				else{
					if(isset($_COOKIE["email"]))
					{
						setcookie("email","");
					}
					if(isset($_COOKIE["password"]))
					{
						setcookie("password","");
					}
				}
                header('Location:userpanel.php');
			}
		}
	}
	else
	{
		$_SESSION['errorEmail'] = "Email Id Mismatched!";
		header('Location:sign.php');
        
	}
}
}
?>