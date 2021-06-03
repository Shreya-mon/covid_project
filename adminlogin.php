


<?php
include_once('connection.php');
?>



<?php
$name = $_POST['name'];
$password = $_POST['pass'];

$sql ="SELECT * FROM `admin_details` WHERE `name` = '".$_REQUEST['name']."' AND `password` = '".$_REQUEST['pass']."'";
$result = mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
	if($row['name']==$name && $row['password']==$password)
 		{  
    		echo "Welcome ".$row['name']." to Menu Page<br><br>";
			echo '<a href="admin.html">Log out</a>';
		}
 	else {
    		echo "You are not an authourized user. ";
		}
}
?>