<?php  // Display safehome data
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		body	
{
	background-image: url("https://p1.pxfuel.com/preview/312/952/22/white-structure-texture-background-ceiling-whitish.jpg");
	background-position: center;
	background-size: cover;
	height: 700px;
	margin-left: 10%;
	margin-right: 10%;
}
a{
			color: forestgreen;
			font-size: 24px;
		}
	</style>
</head>
<body>


<h2 style="font-size: 39px;"><center>Safehome Records</center></h2><br>
<h3 style="color:darkgreen;"><center><a href="menu.html">Back to Home </a></center><br>
<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color: darkSlategray; color: white;">
	<tr>
		<td align="center"><strong>Safehome ID</strong></td>
		<td><strong>Safehome Name</strong></td>
		<td><strong>Safehome Bed Capacity</strong></td>
		<td><strong>Safehome Bed Availability</strong></td>
		<td><strong>Phone number</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Address</strong></td>
		<td><strong>District</strong></td>
	</tr>
    <?php
		$sql = "SELECT * FROM `safehome_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["shid"]."</td>";
				echo "<td>".$row["shname"]."</td>";
				echo "<td>".$row["bed_capacity"]."</td>";
				echo "<td>".$row["bed_available"]."</td>";
				echo "<td>".$row["phno"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["district"]."</td>";
				echo "<td><a href='update_safehome_data_form.php?id=".$row['id']."'>Update</a></td>";
				echo "<td><a href='delete_safehome.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
     
</table>
</div>
</body>
</html>