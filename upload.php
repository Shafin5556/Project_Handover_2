<?php
include 'connect.php';

$rname =  $_POST['name'];
$remail = $_POST['email'];
$rpassword = $_POST['psw'];
$rdob = $_POST['dob'];
$rgender = $_POST['gender'];
$radress = $_POST['adress'];
$rphone = $_POST['phone'];
$rrole=$_POST['role'];


if ($rrole=='student') {



$sql = "SELECT * FROM `student` WHERE `emailid`= '$remail' ";
$duplicate=mysqli_query($conn,$sql);
if (mysqli_num_rows($duplicate)>0)
{
  echo " alert('Email id already registered,please login')";


}
else{

$sql = "INSERT INTO `student`
(`student_id`, `name`, `emailid`, `phone`, `password`, `gender`, `dob`, `adress`)
 VALUES (NULL, '$rname', '$remail', '$rphone', '$rpassword', '$rgender', '$rdob','$radress')";
 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
     echo '<script LANGUAGE="JavaScript">
     window.alert("Account created successfully ,please login to you account");
     window.location.href="index.html";
     </script>';
 }


 else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
}



// librarian log in

elseif ($rrole=='librarian') {

  $sql = "SELECT * FROM `librarian` WHERE `emailid`= '$remail' ";
  $duplicate=mysqli_query($conn,$sql);
  if (mysqli_num_rows($duplicate)>0)
  {
    echo " alert('Email id already registered,please login')";


  }
  else{

  $sql = "INSERT INTO `librarian`
  (`librarian_id`, `name`, `emailid`, `phone`, `password`, `gender`, `dob`, `adress` , `status`)
   VALUES (NULL, '$rname', '$remail', '$rphone', '$rpassword', '$rgender', '$rdob','$radress','inactive')";
   if ($conn->query($sql) === TRUE) {
       echo "New record created successfully ,admin have to accept your request to login..";
       echo '<script LANGUAGE="JavaScript">
       window.alert("New record created successfully ,admin have to accept your request to login");
       window.location.href="index.html";
       </script>';
   }


   else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }


}


 ?>
