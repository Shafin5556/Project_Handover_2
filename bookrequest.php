<?php
session_start();
include 'connect.php';

$prop_id = $_REQUEST['prop_id'];
$lemail = $_SESSION['username'];
$sqlbook = " SELECT * FROM `books` WHERE `book_id`= '$prop_id' ";
$sqlname=mysqli_query($conn,$sqlbook);
while($rowbook = mysqli_fetch_assoc($sqlname)) {

        $bookname = $rowbook["name"];
        // $req= $rowbook["maxreq"];
        }



          $sql = " SELECT * FROM `student` WHERE `emailid`= '$lemail' ";
          $sqlname=mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($sqlname)) {

                  $idid = $row["student_id"];
                  $req= $row["maxreq"];
                  $name=$row["name"];

              }

$req=$req-1;

$san="UPDATE student SET  maxreq='$req' WHERE `student_id`='$idid'" ;
  $sqlrun=mysqli_query($conn,$san);


  $sanbook="UPDATE books SET  status='not available' WHERE `book_id`='$prop_id'" ;
    $sqlrun=mysqli_query($conn,$sanbook);





  $sqlinsert = "INSERT INTO `bookorders`
  (`order_id`, `book_id`, `book_name`, `student_id`, `student_name`, `order_status`)
   VALUES (NULL, '$prop_id', '$bookname', '$idid', '$name', 'requested')";
   if ($conn->query($sqlinsert) === TRUE) {
       echo "New record created successfully";
   }


   else {
       echo "Error: " . $sqlinsert . "<br>" . $conn->error;
   }


   header("Location:dashstudent.php?");











 ?>
