<?php include_once "connection.php"; // Record updation form
session_start();
?>
<?php
if(isset($_POST['submit'])){
    $old_proof=$_POST['oldproof'];
    $new_proof=$_FILES["newproof"]["name"];
$qry = mysqli_query($link, "UPDATE `donor_db` SET `name`='".$_REQUEST['name']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `address`='".$_REQUEST['address']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `phone number`='".$_REQUEST['phno']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `date of birth`='".$_REQUEST['dob']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `gender`='".$_REQUEST['gender']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `blood group`='".$_REQUEST['bgrp']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `district`='".$_REQUEST['district']."' WHERE `id`='".$_REQUEST['id']."'");
$qry = mysqli_query($link, "UPDATE `donor_db` SET `frequency`='".$_REQUEST['freq']."' WHERE `id`='".$_REQUEST['id']."'");
if($new_proof != ''){
    $update_file = $_FILES["newproof"]["name"];
}
else{
    $update_file = $old_proof;
}
if(file_exists("upload/".$_FILES["newproof"]["name"])){
    $filename=$_FILES["newproof"]["name"];
    header('location: usertable.php');
}
else{
    $qry1 = mysqli_query($link, "UPDATE `donor_db` SET `proof`='$update_file' WHERE `id`='".$_REQUEST['id']."'");
    if($_FILES["newproof"]["name"] != ''){
    $path = "upload/".$_FILES["newproof"]["name"];
                                $tmp = $_FILES["newproof"]["tmp_name"];
                                move_uploaded_file($tmp, $path); 
    unlink("upload/".$old_proof);
    }
}

if ($qry) {
    // echo "successfully Deleted";
    header('location: usertable.php');
} else {
    echo "Failed";
}
}

?>