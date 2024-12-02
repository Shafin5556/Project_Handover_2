<?php
session_start();
include 'connect.php';

$prop_id = $_REQUEST['prop_id'];

$sql = "SELECT * FROM `bookorders` WHERE `order_id`='$prop_id' ";
$sqlname=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($sqlname)) {
$studentid=$row["student_id"];
    $bookid=$row["book_id"];
}

$sanbook="UPDATE books SET  status='available' WHERE `book_id`='$bookid'" ;
  $sqlrun=mysqli_query($conn,$sanbook);





  $sql = "SELECT * FROM `student` WHERE `student_id`='$studentid' ";
  $sqlname=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($sqlname)) {

      $maxreq=$row["maxreq"];
  }
$maxreq = $maxreq + 1;


  $san="UPDATE student SET  maxreq='$maxreq' WHERE `student_id`='$studentid'" ;
    $sqlrun=mysqli_query($conn,$san);



$san="DELETE FROM `bookorders` WHERE `bookorders`.`order_id` = '$prop_id'" ;
  $sqlrun=mysqli_query($conn,$san);







 header("Location:dashlibrarian.php?");




 ?>
