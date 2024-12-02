<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>

    <?php
session_start();
include 'connect.php';




    if (isset($_POST['submitbtn'])) {

      $luser = $_POST['username'];
      $lpassword=$_POST['password'];
      $rrole=$_POST["role"];

      if ($rrole=='student') {


        $sql = " SELECT * FROM `student` WHERE `emailid`= '$luser' AND `password`='$lpassword' ";
        if(mysqli_query( $conn,$sql)){

          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);

          // $result =query($sql,$conn);
          // echo mysql_num_rows($result);

          if (($luser == "admin") && ($lpassword=="admin"))  {

              header("Location: admin.php");
          }



              elseif ($row > 0)
              {
                 //successfull login
               $_SESSION['username'] = $luser;
               header("Location: dashstudent.php");
               exit();
             }
             else {



              echo 'echo ("<script LANGUAGE="JavaScript">
              window.alert("Invalid Login Credentials");
              window.location.href="login.php";
              </script>");';

             }





        }



        else{
        echo "Sorry,failed to connect".mysqli_error($conn);
        }







}

elseif ($rrole=='librarian') {


  $sql = " SELECT * FROM `librarian` WHERE `emailid`= '$luser' AND `password`='$lpassword' ";
  if(mysqli_query( $conn,$sql)){

    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);




    while($ro = mysqli_fetch_assoc($result)) {
      $status= $ro["status"];
                                 }


    // $result =query($sql,$conn);
    // echo mysql_num_rows($result);

    if (($luser == "admin") && ($lpassword=="admin"))  {

        header("Location: admin.php");
    }



        elseif ($row > 0)

        {
            if ($status=="active") {

              //successfull login
            $_SESSION['user'] = $luser;
            header("Location: dashlibrarian.php");
            exit();
           }
           else {
             echo '<script LANGUAGE="JavaScript">
             window.alert("sorry, admin not yet accepted your registration request.please contact lib admin");
             window.location.href="login.php";
             </script>';
           }



       }
                       else {



        echo 'echo ("<script LANGUAGE="JavaScript">
        window.alert("Invalid Login Credentials");
        window.location.href="login.php";
        </script>");';

                                  }







}

                     else{
                 echo "Sorry,failed to connect".mysqli_error($conn);
                        }
}
}

   ?>


<header>



<div class="container">



<img src="images/logo.png" alt="logo"><?php include 'connect.php' ?>
<a href="index.html"><span>Go back to home</span></a>

</div>
</header>




    <form class="box" action=""  method="post">
  <h1>Login</h1>




  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>

<h3>Login As</h3>
<select name="role" >
  <option value="student">Student</option>
  <option value="librarian">Librarian</option>
</select>


  <input type="submit" name="submitbtn" onclick="select()" value="Login">
</form>
<?php







 ?>







  </body>
</html>
