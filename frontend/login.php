<?php
include("connection.php");
if(isset($_POST['submit'])){
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
				echo "<script>alert('Incorrect password.');</script>";
                
			}
			else
			{
				$row = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['uname'];
				$_SESSION['email'] = $row['email'];
                header('Location:userpanel.php');
			}
		}
	}
	else
	{
	    echo "<script>alert('Email id mismatched!!!');</script>";
        
	}
}
}
?>