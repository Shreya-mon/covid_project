<?php  // Display doctor category data 
include("connection.php");
echo '<h2><center>Doctor Category</center></h2><br>';
echo '<center><a href="menu.html">Back to Home </a></center><br>';
?>
<table width = "80%" border="1" cellspacing="2" cellpadding="5" align="center">
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