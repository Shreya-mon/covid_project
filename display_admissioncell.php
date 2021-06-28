<?php  // Display admission cell data 
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>		body	
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

</body>
</html>
<h2 style="font-size:38px;"><center>Admission Cell Helpdesk</center></h2><br>
<center><a href="menu.html">Back to Home </a></center><br>

<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color:darkSlategray; color:floralwhite;">
	<tr>
		<td align="center"><strong>District</strong></td>
		<td><strong>Contact Number</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT * FROM `admission_cell_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["district"]."</td>";
				echo "<td>".$row["phno"]."</td>";
				
				echo "<td><a href='update_admissioncell.php?id=".$row['id']."'>Update</a></td>";
				echo "<td><a href='delete_admissioncell.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>