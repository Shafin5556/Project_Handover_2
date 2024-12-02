<?php
session_start();
include 'connect.php';

$prop_id = $_REQUEST['prop_id'];
$lemail = $_SESSION['username'];

$san="UPDATE bookorders SET  order_status='accepted' WHERE `order_id`='$prop_id'" ;
  $sqlrun=mysqli_query($conn,$san);

 header("Location:dashlibrarian.php?");

 ?>
