<?php  // Display doctor category data 
include("connection.php");?>
<<!DOCTYPE html>
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
<h2 style="font-size:38px;"><center>Doctor Category</center></h2><br>';
<center><a href="menu.html">Back to Home </a></center><br>;

<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color:darkSlategray; color:floralwhite;">
	<tr>
		<td align="center"><strong>Category ID</strong></td>
		<td><strong>Category Name</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT * FROM `doctor_category`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["cat_id"]."</td>";
				echo "<td>".$row["category_name"]."</td>";
				
				echo "<td><a href='update_doctor_category_form.php?cat_id=".$row['cat_id']."'>Update</a></td>";
				echo "<td><a href='delete_doctor_category.php?cat_id=".$row['cat_id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>