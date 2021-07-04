<?php include_once "connection.php"; // Record updation form
?>

<?php 
	$qry = mysqli_query($link, "SELECT * FROM `survivor_db` WHERE `id` = '".$_REQUEST['id']."'");
		$row = mysqli_fetch_array($qry);
?>
<?php
if(isset($_POST['submit'])){
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `age`='".$_REQUEST['age']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `profession`='".$_REQUEST['profession']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `city`='".$_REQUEST['city']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `survivor_db` SET `experience`='".$_REQUEST['experience']."' WHERE `id`='".$_REQUEST['id']."'");
$qry2 = mysqli_query($link, "UPDATE `survivor_db` SET `title`='".$_REQUEST['title']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `survivor_db` SET `video`='".$_REQUEST['video']."' WHERE `id`='".$_REQUEST['id']."'");
 $path = "upload/".$_FILES["video"]["name"];
                                $tmp = $_FILES["video"]["tmp_name"];
                                move_uploaded_file($tmp, $path); 
if ($qry2) {
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
            <h2 class="col-10">Update Your Record As Covid Survivor</h2>
        </div>
        <div class="row mt-5 center-center p-4">
            <form class="col-12 row p-2" action="#" method="POST" enctype="multipart/form-data"
                style=" background-color:rgb(254, 247, 255); max-width: 500px; border: 1px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 12px;">
                <input type="hidden" name="id" value="<?=$row['id']?>">
                <div class="col-12 mt-1 ">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" required>
                </div>
                <div class="col-12 mt-1 ">
                            <label for="Age" class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" value="<?=$row['age']?>" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Profession" class="form-label">Profession</label>
                            <input type="text" class="form-control" name="profession" value="<?=$row['profession']?>" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" value="<?=$row['city']?>" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="District" class="form-label">District</label>
                            <input type="text" class="form-control" name="district" value="<?=$row['district']?>" required>
                        </div>
                        
                        <div class="col-12 mt-1">
                            <label for="Share Your Experience" class="form-label">Share Your Experience</label><br>
                            <textarea name="experience" rows="5" class="form-control" required><?=$row['experience']?></textarea>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Add A Title" class="form-label">Add A Title</label><br>
                            <textarea name="title" rows="5" class="form-control" required><?=$row['title']?></textarea>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Upload Video" class="form-label">Upload Video</label>
                            <input type="file" class="form-control" name="video" id="formFile" value="<?=$row['video']?>">
                        </div>
                        <div class="col-12 mt-3">
                            <input type="submit" class="btn btn-primary" name="submit" value="Update">
                        </div> 
                    </form>
                </div>
            </div>
	    </body>
</html>