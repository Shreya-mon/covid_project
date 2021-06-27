<?php  // Display service provider data 
include("connection.php");?>
<h2 style="font-size:29px;"><center>Service Providers Records</center></h2><br>
<center><a href="menu.html">Back to Home </a></center><br>

<!DOCTYPE html>
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
		<td align="center"><strong>ID</strong></td>
		<td align="center"><strong>Service ID</strong></td>
		<td align="center"><strong> Name</strong></td>
		<td align="center"><strong>Contact Number</strong></td>
		<td align="center"><strong>Email</strong></td>
		<td align="center"><strong>Description</strong></td>
		<td align="center"><strong>District</strong></td>
		<td align="center"><strong>Address</strong></td>
		
	</tr>
    <?php
		$sql = "SELECT 
		 `service_providers`.`id` AS `id`,
		 `service_providers`.`service_id` AS `service_id`,
		 `service_providers`.`name` AS `name`,
		 `service_providers`.`contact` AS `contact`,
		 `service_providers`.`email` AS `email`,
		 `service_providers`.`description` AS `description`,
		 `service_providers`.`district` AS `district`,
		 `service_providers`.`address` AS `address`,
		 `service`.`name` AS `service_name`
		FROM `service_providers`,`service` where `service_providers`.`service_id`=`service`.`service_id`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			$count=1;
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$count."</td>";
				echo "<td align = 'center'>".$row["service_name"]."</td>";
				echo "<td align = 'center'>".$row["name"]."</td>";
				echo "<td align = 'center'>".$row["contact"]."</td>";
				echo "<td align = 'center'>".$row["email"]."</td>";
				echo "<td align = 'center'>".$row["description"]."</td>";
				echo "<td align = 'center'>".$row["district"]."</td>";
				echo "<td align = 'center'>".$row["address"]."</td>";
				
				echo "<td><a href='update_service_provider_form.php?id=".$row['id']."&name=".$row['service_name']."'>Update</a></td>";
				echo "<td><a href='delete_service_provider.php?id=".$row['id']."'>Delete</a></td>";
				
				echo "</tr>";
				$count++;
			}
		}
     ?>
</table>