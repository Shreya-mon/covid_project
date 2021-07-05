<?php  // Display survivor's data
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


<h2 style="font-size: 39px;"><center>Survivor's Post</center></h2><br>
<h3 style="color:darkgreen;"><center><a href="menu.html">Back to Home </a></center><br>
<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center" style="background-color: darkSlategray; color: white;">
	<tr>
		<td><strong>Name</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Age</strong></td>
		<td><strong>Profession</strong></td>
		<td><strong>City</strong></td>
		<td><strong>District</strong></td>
		<td><strong>Experience As COVID Survivor</strong></td>
		<td><strong>Title</strong></td>
		<td><strong>Posted Videos</strong></td>
	</tr>
    <?php
		$sql = "SELECT * FROM `survivor_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["age"]."</td>";
				echo "<td>".$row["profession"]."</td>";
				echo "<td>".$row["city"]."</td>";
				echo "<td>".$row["district"]."</td>";
				echo "<td>".$row["experience"]."</td>";
				echo "<td>".$row["title"]."</td>";
				?>
                <td><img src="<?php echo "frontend/upload/".$row['video']; ?>" width="100px"></td>
                <?php 
		
				echo "<td><a href='delete_survivor.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
     
</table>
</div>
</body>
</html>