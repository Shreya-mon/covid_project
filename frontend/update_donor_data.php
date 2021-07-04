<?php include_once "connection.php"; // Record updation form
?>
<?php
if(isset($_POST['submit'])){
$qry = mysqli_query($link, "UPDATE `donor_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `phone number`='".$_REQUEST['phno']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `date of birth`='".$_REQUEST['dob']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `gender`='".$_REQUEST['gender']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `blood group`='".$_REQUEST['bgrp']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `frequency`='".$_REQUEST['freq']."' WHERE `id`='".$_REQUEST['id']."'");
$qry1 = mysqli_query($link, "UPDATE `donor_db` SET `proof`='".$_REQUEST['proof']."' WHERE `id`='".$_REQUEST['id']."'");
 $path = "upload/".$_FILES["photo"]["name"];
                                $tmp = $_FILES["photo"]["tmp_name"];
                                move_uploaded_file($tmp, $path); 
if ($qry) {
    // echo "successfully Deleted";
    header('location: usertable.php');
} else {
    echo "Failed";
}
}

?>