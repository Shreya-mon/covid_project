<?php

include("connection.php");
  

$name = $_POST['name'];
//$id = $_POST['id'];
$password = $_POST['pass'];

$sql ="select * from admin_details where name = '$name' and password = '$password'";
$result = mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
	if($row['name']==$name && $row['password']==$password)
 		{  
    		echo "Welcome ".$row['name']." to Menu Page<br><br>";
    		echo '<a href="menu.html">Click Here To Go To Menu!!</a><br><br><br>';
			echo '<a href="admin.html">Log out</a>';
		}


 	else {
    		echo "You are not an authourized user. ";
		}
}
	
 	else {
    		echo "You are not an authourized user. ";
		}

?>