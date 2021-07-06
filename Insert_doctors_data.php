



<!DOCTYPE html>
<!--Insert data into doctor_consultation database-->
<html>
<head>
	<!--<link rel="stylesheet" href="style4.css">-->
	<!-- <link rel="stylesheet" href="../style2.css">  -->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css"
        integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-control {
            background-color: transparent;
        }

        body {
            background-image: url("./frontend/images/update.png");
        }
    </style>
</head>
<body>
    <div class="container pt-5 pb-5">
        <div class="row pt-3 pb-3 text-center" style="background-color: #c368ff; color: #FFFFFF">
            <div class="col-1">
                <a href="menu.html" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                        style="color: rgb(8, 1, 15);"></i></a>
            </div>
            <h2 class="col-10">Insert Records to Doctor Consultation</h2>
        </div>
        <div class="row mt-5 center-center p-4">
            <form class="col-12 row p-2" action="insert_data.php" method="POST" name="insert_frm" enctype="multipart/form-data"
                style=" background-color:rgb(254, 247, 255); max-width: 500px; border: 1px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 12px;">
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Category ID :</label>
                    <select name="cat_id" class="form-control">
			           <?php
                          include("connection.php");
                          $qry = mysqli_query($link, "SELECT * FROM `doctor_category`");
                          while($row = mysqli_fetch_array($qry)) {
					      // print_r($row);
					    ?>
						<option value="<?=$row['cat_id']?>"><?=$row['category_name']?></option>
					    <?php
				          }
			            ?>
		            </select>
                </div>
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Doctor's Name : </label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Doctor's Contact Number : </label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Contact Number" required>
                </div>
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Email-id : </label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Address : </label>
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">District : </label>
                    <input type="text" class="form-control" name="district" placeholder="District" required>
                </div>
				<div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Doctor's additional information : </label>
                    <input type="text" class="form-control" name="doctor_additional_info" placeholder="Add more information" required>
                </div>
                <div class="col-12 mt-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>  
            </form>
        </div>
    </div>






	<!--
	<center>
	<h1>Insert Records to Doctor Consultation</h1><br>
	<a href="menu.html">Back to Menu</a>
	</center>
	<br><br><br>
	<form action="insert_data.php" method="post" name="insert_frm">
		<label>Category ID : 
		<select name="cat_id">
			<?php

				include("connection.php");

				$qry = mysqli_query($link, "SELECT * FROM `doctor_category`");

				while($row = mysqli_fetch_array($qry)) {
					// print_r($row);
					?>
						<option value="<?=$row['cat_id']?>"><?=$row['category_name']?></option>
					<?php
				}
			?>
		</select><br><br>
		<label>Doctor's Name : </label><input type="text" name="name" placeholder="Name"><br><br>
		<label>Doctor's Contact Number : </label><input type="text" name="phone_number" placeholder="Contact Number"><br><br>
		<label>Email-id : </label><input type="email" name="email" placeholder="Email"><br><br>
		<label>Address : </label><input type="text" name="address" placeholder="Address"><br><br>
		<label>District : </label><input type="text" name="district" placeholder="District"><br><br>
		<label>Doctor's additional information : </label><input type="text" name="doctor_additional_info" placeholder="Add more information">
		<br><br><br>
		<center><input type="submit" value="Submit"></center>
	</form>-->
</body>
</html>



















