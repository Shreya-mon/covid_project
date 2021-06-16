<?php  // Display service data 
include("connection.php");?>
<h2 style="font-size:29px;"><center>Service Record</center></h2><br>';
<center><a href="menu.html">Back to Home </a></center><br>';

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		a{
			color: forestgreen;
			font-size: 21px;
		}
		body	
				{
	background-image: url("https://p1.pxfuel.com/preview/312/952/22/white-structure-texture-background-ceiling-whitish.jpg");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
	}

	</style>
</head>
<body>

</body>
</html>

<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color:black; color:floralwhite;">
	<tr>
		<td align="center"><strong>Service Id</strong></td>
		<td align="center"><strong>Service Name</strong></td>
		<td align="center"><strong>Service Description</strong></td>
		<td colspan="2"><strong><center>Actions</center></strong></td>
	</tr>
    <?php
		$sql = "SELECT * FROM `service`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["service_id"]."</td>";
				echo "<td align = 'center'>".$row["name"]."</td>";
				echo "<td align = 'center'>".$row["description"]."</td>";
				echo "<td><a href='update_service_form.php?id=".$row['service_id']."'>Update</a></td>";
				echo "<td><a href='delete_service.php?id=".$row['service_id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>