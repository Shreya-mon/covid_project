<?php
include("connection.php");
?>
<?php
session_start();
session_destroy();
$msg = "You have logged out successfully";
header('Location:loginfrm.php?msg='.$msg);
?>