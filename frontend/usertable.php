<?php  
include("connection.php");
session_start();
$email= $_SESSION['email'];
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row pt-2">
            <a href="./userpanel.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                    style="color: blueviolet;"></i></a>
            <div class="container  mt-5">
                <div class="row" style="text-align: center; align-items: center; justify-content: center;">
                    <h3>Your Inserted Data List</h3>
                </div>
                <!--1.Donor data display-->
                <?php
                    $count=0;
                    $sql="SELECT * FROM `donor_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                        <h4>Information As Donor</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
		                                <th scope="col">Address</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Date of Birth</th>
		                                <th scope="col">Gender</th>
		                                <th scope="col">Blood Group</th>
		                                <th scope="col">District</th>
		                                <th scope="col">Frequency</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				                            echo "<td>".$row["address"]."</td>";
				                            echo "<td>".$row["phone number"]."</td>";
				                            echo "<td>".$row["date of birth"]."</td>";
				                            echo "<td>".$row["gender"]."</td>";
				                            echo "<td>".$row["blood group"]."</td>";
				                            echo "<td>".$row["district"]."</td>";
				                            echo "<td>".$row["frequency"]."</td>";
				                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else {  $count++; }
                        ?>
                    </div>
                <!--2.Receiver data display-->
                <?php
                    $sql="SELECT * FROM `receiver_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Receiver</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
		                                <th scope="col">Address</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Date of Birth</th>
		                                <th scope="col">Gender</th>
		                                <th scope="col">Blood Group</th>
		                                <th scope="col">District</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				                            echo "<td>".$row["address"]."</td>";
				                            echo "<td>".$row["phone number"]."</td>";
				                            echo "<td>".$row["date of birth"]."</td>";
				                            echo "<td>".$row["gender"]."</td>";
				                            echo "<td>".$row["blood group"]."</td>";
				                            echo "<td>".$row["district"]."</td>";
				                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "<td><a href='find_donor.php?district=".$row['district']."&id=".$row['id']."'><button class='btn btn-primary'>Find Donor</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--3.Oxygen supplier data display-->
                <?php
                    $sql="SELECT * FROM `oxygen_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Oxygen Supplier</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Application Type</th>
		                                <th scope="col">Address</th>
                                        <th scope="col">District</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["application type"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["phone number"]."</td>";
                                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--4.Healthcare volunteer data display-->
                <?php
                    $sql="SELECT * FROM `volunteer_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Healthcare Volunteer</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">User-Type</th>
		                                <th scope="col">Address</th>
                                        <th scope="col">District</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["user_type"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["phno"]."</td>";
                                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='update_volunteer.php?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--5.Meal Provider data display-->
                <?php
                    $sql="SELECT * FROM `mealprovider_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Meal Provider</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
		                                <th scope="col">Address</th>
                                        <th scope="col">District</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				                            echo "<td>".$row["address"]."</td>";
				                            echo "<td>".$row["district"]."</td>";
				                            echo "<td>".$row["phno"]."</td>";
				                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='update_mealprovider.php?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--6.Childcare Provider data display-->
                <?php
                    $sql="SELECT * FROM `childcareprovider_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Childcare Provider</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
		                                <th scope="col">Address</th>
                                        <th scope="col">District</th>
		                                <th scope="col">Phone Number</th>
		                                <th scope="col">Proof</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            
                                            echo "<td>".$row["phno"]."</td>";
                                            echo "<td>".$row["proof"]."</td>";
                                            echo "<td><a href='update_childcareprovider.php?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--7.Warrior data display-->
                <?php
                    $sql="SELECT * FROM `warrior_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Your Post As Warrior</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Profession</th>
		                                <th scope="col">City</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Experience As COVID Warrior</th>
                                        <th scope="col">Title</th>
		                                <th scope="col">Posted Photos</th>
		                                <th scope="col">Posted Videos</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
				                            echo "<td>".$row["age"]."</td>";
				                            echo "<td>".$row["profession"]."</td>";
				                            echo "<td>".$row["city"]."</td>";
				                            echo "<td>".$row["district"]."</td>";
				                            echo "<td>".$row["experience"]."</td>";
				                            echo "<td>".$row["title"]."</td>";
                                            echo "<td>".$row["photo"]."</td>";
				                            echo "<td>".$row["video"]."</td>";
                                            echo "<td><a href='update_warrior.php?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--8.Survivor data display-->
                <?php
                    $sql="SELECT * FROM `survivor_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Your Post As Survivor</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Profession</th>
		                                <th scope="col">City</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Experience As COVID Survivor</th>
                                        <th scope="col">Title</th>
		                                <th scope="col">Posted Videos</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["age"]."</td>";
                                            echo "<td>".$row["profession"]."</td>";
                                            echo "<td>".$row["city"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["experience"]."</td>";
                                            echo "<td>".$row["title"]."</td>";
                                            echo "<td>".$row["video"]."</td>";
                                            echo "<td><a href='update_survivor.php?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--9.NGO data display-->
                <?php
                    $sql="SELECT * FROM `ngo_registration` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As NGO</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">NGO Name</th>
                                        <th scope="col">NGO Address</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Proof Certificate</th>
		                                <th scope="col">Category</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["ph_no"]."</td>";
                                            echo "<td>".$row["file"]."</td>";
                                            echo "<td>".$row["category"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--10.NGO-individual data display-->
                <?php
                    $sql="SELECT * FROM `ngo_registration_individual` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Individual Helper</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Proof Certificate</th>
		                                <th scope="col">Category</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["ph_no"]."</td>";
                                            echo "<td>".$row["file"]."</td>";
                                            echo "<td>".$row["category"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>
                <!--11.HelpSeeker data display-->
                <?php
                    $sql="SELECT * FROM `ngo_help_db` WHERE `email`= '$email' ";
                    if(mysqli_num_rows(mysqli_query($link,$sql)) > 0)
                    {
                    ?>
                    <div class="row mt-3">
                    <h4>Information As Help Seeker</h4>
                        <table class="table">
                            <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Proof Certificate</th>
                                        <th scope="col">Description</th>
		                                <th scope="col">Category</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php   
                                        $result=mysqli_query($link,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$row["name"]."</td>";
                                            echo "<td>".$row["address"]."</td>";
                                            echo "<td>".$row["district"]."</td>";
                                            echo "<td>".$row["ph_no"]."</td>";
                                            echo "<td>".$row["file"]."</td>";
                                            echo "<td>".$row["description"]."</td>";
                                            echo "<td>".$row["category"]."</td>";
                                            echo "<td><a href='#?id=".$row['id']."'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "</tr>";
                                        }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else { $count++;  }
                        ?>
                    </div>

                    <?php
                    if($count==11){ echo 'No record found';
                    }?>
            </div>
        </div>
     </div>
</body>

</html>