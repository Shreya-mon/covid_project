<?php  // Display receiver data
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oxygen Supplier Data</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="frontend/jqueryV3.6.0.min.js"></script>
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


<h2 style="font-size: 39px;"><center> Records of Oxygen Suppliers  </center></h2><br>
<h3 style="color:darkgreen;"><center><a href="menu.html">Back to Home </a></center><br>
<table width = "100%" border="1" cellspacing="1" cellpadding="3" align="center" style="background-color: pink; color: black;">
	<tr>
		<td align="center"><strong>ID</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Application Type</strong></td>
		<td><strong>Address</strong></td>
		<td><strong>District</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Phone Number</strong></td>
		<td><strong>Proof</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT * FROM `oxygen_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["application type"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["district"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["phone number"]."</td>";
				?>
                <td>
					<a href="<?php echo "frontend/upload/".$row['proof']; ?>" class="fancybox" data-fancybox="gallery1">
						<img src="<?php echo "frontend/upload/".$row['proof']; ?>" width="100px">
				    </a>
				</td>
                <?php 
				
				
				echo "<td><a href='delete_oxygen_regt_data.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>
</div>
</body>
</html>