<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `receiver_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
        $dist = isset($row['district']) ? $row['district']:'';
        $gen = isset($row['gender']) ? $row['gender']:'';
        $bloodgrp = isset($row['blood group']) ? $row['blood group']:'';
?>

<?php
if(isset($_POST['submit'])){
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `phone number`='".$_REQUEST['phno']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `date of birth`='".$_REQUEST['dob']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `gender`='".$_REQUEST['gender']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `blood group`='".$_REQUEST['bgrp']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `receiver_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `receiver_db` SET `proof`='".$_REQUEST['proof']."' WHERE `id`='".$_REQUEST['id']."'");
if ($qry) {
    // echo "successfully Deleted";
    header('location: usertable.php');
} else {
    echo "Failed";
}
}

?>

<!DOCTYPE html>
<html>

<head>
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
            background-image: url("./images/update.png");
        }
    </style>
</head>

<body>
    <div class="container pt-5 pb-5">
        <div class="row pt-3 pb-3 text-center" style="background-color: #c368ff; color: #FFFFFF">
            <div class="col-1">
                <a href="usertable.php" style="width: 20%;" class="mb-2 pb-2"><i class="fas fa-arrow-circle-left fa-3x "
                        style="color: rgb(8, 1, 15);"></i></a>
            </div>
            <h2 class="col-10">Update Your Record As Receiver</h2>
        </div>
        <div class="row mt-5 center-center p-4">
            <form class="col-12 row p-2" action="#" method="POST"
                style=" background-color:rgb(254, 247, 255); max-width: 500px; border: 1px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 12px;">
                <input type="hidden" name="id" value="<?=$row['id']?>">
                <div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" required>
                </div>
                <div class="col-12 mt-1">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?=$row['address']?>" required>
                </div>
                <div class="col-12 mt-1">
                    <label for="Phone Number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phno" value="<?= $row['phone number'] ?>" required>
                </div>
                <div class="col-12 mt-1">
                    <label for="Date Of Birth" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" value="<?=$row['date of birth']?>" required>
                </div>
                <div class="col-12 mt-1">
                    Gender: &nbsp;Male <input type="radio" value="Male" name="gender" <?php if($gen=='Male'
                        ){echo "checked" ;} ?>> Female <input type="radio" value="Female" name="gender" <?php
                        if($gen=='Female' ){echo "checked" ;} ?>> Other <input type="radio" value="Other" name="gender"
                        <?php if($gen=='Other' ){echo "checked" ;} ?>>
                </div>
                <div class="col-12 mt-1">
                    <label for="">Blood Group</label>
                    <select class="form-control" name="bgrp">
                        <option value="A+" <?php if($bloodgrp=='A+' ){echo "selected" ;} ?>>A+</option>
                        <option value="B+" <?php if($bloodgrp=='B+' ){echo "selected" ;} ?>>B+</option>
                        <option value="AB+" <?php if($bloodgrp=='AB+' ){echo "selected" ;} ?>>AB+</option>
                        <option value="O+" <?php if($bloodgrp=='O+' ){echo "selected" ;} ?>>O+</option>
                        <option value="A-" <?php if($bloodgrp=='A-' ){echo "selected" ;} ?>>A-</option>
                        <option value="B-" <?php if($bloodgrp=='B-' ){echo "selected" ;} ?>>B-</option>
                        <option value="AB-" <?php if($bloodgrp=='AB-' ){echo "selected" ;} ?>>AB-</option>
                        <option value="O-" <?php if($bloodgrp=='O-' ){echo "selected" ;} ?>>O-</option>
                    </select>
                </div>
                <div class="col-12 mt-1">
                    <label for="district">District</label>
                    <select class="form-control" name="district" id="dist">
                        <option value="Alipurduar" <?php if($dist=='Alipurduar' ){echo "selected" ;} ?>>Alipurduar
                        </option>
                        <option value="Bankura" <?php if($dist=="Bankura" ){echo "selected" ;} ?>>Bankura</option>
                        <option value="Paschim Bardhaman" <?php if($dist=="Paschim Bardhaman" ){echo "selected" ;} ?>
                            >Paschim Bardhaman</option>
                        <option value="Purba Bardhaman" <?php if($dist=="Purba Bardhaman" ){echo "selected" ;} ?>
                            >Purba Bardhaman</option>
                        <option value="Birbhum" <?php if($dist=="Birbhum" ){echo "selected" ;} ?>>Birbhum</option>
                        <option value="Cooch Behar" <?php if($dist=="Cooch Behar" ){echo "selected" ;} ?>>Cooch
                            Behar</option>
                        <option value="Dakshin Dinajpur" <?php if($dist=="Dakshin Dinajpur" ){echo "selected" ;} ?>
                            >Dakshin Dinajpur</option>
                        <option value="Darjeeling" <?php if($dist=="Darjeeling" ){echo "selected" ;} ?>>Darjeeling
                        </option>
                        <option value="Hooghly" <?php if($dist=="Hooghly" ){echo "selected" ;} ?>>Hooghly</option>
                        <option value="Howrah" <?php if($dist=="Howrah" ){echo "selected" ;} ?>>Howrah</option>
                        <option value="Jalpaiguri" <?php if($dist=="Jalpaiguri" ){echo "selected" ;} ?>>Jalpaiguri
                        </option>
                        <option value="Jhargram" <?php if($dist=="Jhargram" ){echo "selected" ;} ?>>Jhargram
                        </option>
                        <option value="Kalimpong" <?php if($dist=="Kalimpong" ){echo "selected" ;} ?>>Kalimpong
                        </option>
                        <option value="Kolkata" <?php if($dist=="Kolkata" ){echo "selected" ;} ?>>Kolkata</option>
                        <option value="Maldah" <?php if($dist=="Maldah" ){echo "selected" ;} ?>>Maldah</option>
                        <option value="Murshidabad" <?php if($dist=="Murshidabad" ){echo "selected" ;} ?>
                            >Murshidabad</option>
                        <option value="Nadia" <?php if($dist=="Nadia" ){echo "selected" ;} ?>>Nadia</option>
                        <option value="North 24 Parganas" <?php if($dist=="North 24 Parganas" ){echo "selected" ;} ?>
                            >North 24 Parganas</option>
                        <option value="Paschim Medinipur" <?php if($dist=="Paschim Medinipur" ){echo "selected" ;} ?>
                            >Paschim Medinipur</option>
                        <option value="Purba Medinipur" <?php if($dist=="Purba Medinipur" ){echo "selected" ;} ?>
                            >Purba Medinipur</option>
                        <option value="Purulia" <?php if($dist=="Purulia" ){echo "selected" ;} ?>>Purulia</option>
                        <option value="South 24 Parganas" <?php if($dist=="South 24 Parganas" ){echo "selected" ;} ?>
                            >South 24 Parganas</option>
                        <option value="Uttar Dinajpur" <?php if($dist=="Uttar Dinajpur" ){echo "selected" ;} ?>
                            >Uttar Dinajpur</option>
                    </select>
                </div>
                <div class="col-12 mt-1">
                    <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
                    <input type="file" class="form-control" name="proof" id="formFile" value="<?=$row['proof']?>">
                </div>
                <div class="col-12 mt-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>