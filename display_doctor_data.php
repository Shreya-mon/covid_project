<?php  // Display doctors data 
include("connection.php");
echo '<h2><center>Doctor Records</center></h2><br>';
echo '<center><a href="menu.html">Back to Home </a></center><br>';
?>
<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center">
	<tr>
		<td align="center"><strong>ID</strong></td>
		<td align="center"><strong>Category ID</strong></td>
		<td align="center"><strong>Doctor's Name</strong></td>
		<td align="center"><strong>Doctor's Contact Number</strong></td>
		<td align="center"><strong>Email</strong></td>
		<td align="center"><strong>Address</strong></td>
		<td align="center"><strong>Location</strong></td>
		<td align="center"><strong>Doctor's additional information</strong></td>
		<td colspan="2"><strong><center>Actions</center></strong></td>
	</tr>
    <?php
		$sql = "SELECT * FROM `doctor_db`";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td align = 'center'>".$row["id"]."</td>";
				echo "<td align = 'center'>".$row["cat_id"]."</td>";
				echo "<td align = 'center'>".$row["dname"]."</td>";
				echo "<td align = 'center'>".$row["phno"]."</td>";
				echo "<td align = 'center'>".$row["email"]."</td>";
				echo "<td align = 'center'>".$row["address"]."</td>";
				echo "<td align = 'center'>".$row["location"]."</td>";
				echo "<td align = 'center'>".$row["doctors_additional_info"]."</td>";
				echo "<td><a href='update_frm_doctor.php?id=".$row['id']."'>Update</a></td>";
				echo "<td><a href='delete_doctor_data.php?id=".$row['id']."'>Delete</a></td>";
				echo "</tr>";
			}
		}
     ?>
</table>