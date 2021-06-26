<?php  // Display hospital data
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


<h2 style="font-size: 39px;"><center> Records of Health-Care Volunteers </center></h2><br>
<h3 style="color:darkgreen;"><center><a href="menu.html">Back to Home </a></center><br>
<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color: darkSlategray; color: white;">
	<tr>
		<td align="center"><strong>ID</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>User-Type</strong></td>
		<td><strong>Address</strong></td>
		<td><strong>District</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Phone number</strong></td>
		<td><strong>Proof</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT * FROM `volunteer_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["user_type"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["district"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["phno"]."</td>";
				echo "<td>".$row["proof"]."</td>";
				
				
				echo "<td><a href='delete_volunteer_data.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
     
</table>
</div>
</body>
</html>