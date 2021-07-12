<?php include_once "connection.php"; // Record updation form
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Care</title>
    <link rel="icon" href="./images/logo.jpg" type="image/png">
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

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    
 <div class="container">
        <div class="row pt-2">
        <a href="usertable.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                    style="color: blueviolet;"></i></a>
        <div class="container  mt-5">
                <div class="row" style="text-align: center; align-items: center; justify-content: center;">
                    <h3>Your Nearby Donor</h3>
                </div><br>
                    <div class="row mt-3">
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Blood Group</th>
		                                <th scope="col">District</th>
		                                <th scope="col">Frequency</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php  
                                $sql="SELECT * FROM `receiver_db` WHERE `id`='".$_REQUEST['id']."'";
                                $result=mysqli_query($link,$sql);
                                $row = mysqli_fetch_assoc($result);
                                $bloodgrp=$row['blood group'];
                                $email =$row['email'];
                                $district = $_REQUEST['district'];
                                $sql = "SELECT * FROM `donor_db` WHERE `district`='$district' AND `blood group`='$bloodgrp' AND `email`!='$email'";
                                $result= mysqli_query($link,$sql);
                                    if(mysqli_num_rows($result) > 0)
                                    {   
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				                            echo "<td>".$row["phone number"]."</td>";
				                            echo "<td>".$row["blood group"]."</td>";
				                            echo "<td>".$row["district"]."</td>";
				                            echo "<td>".$row["frequency"]."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    else {  echo '<tr><td colspan="7" style="color:red; text-align:center;">No record found</td></tr>'; }
                            ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>