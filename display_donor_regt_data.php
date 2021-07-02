<?php  // Display donor data
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


<h2 style="font-size: 39px;"><center> Records of Blood Donors  </center></h2><br>
<h3 style="color:darkgreen;"><center><a href="menu.html">Back to Home </a></center><br>
<table width = "100%" border="1" cellspacing="1" cellpadding="3" align="center" style="background-color: pink; color: black;">
	<tr>
		<td align="center"><strong>ID</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Address</strong></td>
		<td><strong>Phone Number</strong></td>
		<td><strong>Date of Birth</strong></td>
		<td><strong>Gender</strong></td>
		<td><strong>Blood Group</strong></td>
		<td><strong>District</strong></td>
		<td><strong>Frequency</strong></td>
		<td><strong>Proof</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT * FROM `donor_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["phone number"]."</td>";
				echo "<td>".$row["date of birth"]."</td>";
				echo "<td>".$row["gender"]."</td>";
				echo "<td>".$row["blood group"]."</td>";
				echo "<td>".$row["district"]."</td>";
				echo "<td>".$row["frequency"]."</td>";
				echo "<td>".$row["proof"]."</td>";
				
				
				echo "<td><a href='delete_donor_regt_data.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>
</div>
</body>
</html>