<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/registration.css">
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <script type="text/javascript">

    function valid()
    {



    var password1 = document.getElementById("psw").value;
    var n = password1.length;
    if (n <= 5 ) {
       alert("Password must contain 6 characters.");
       return false;
    }
     var password = document.getElementById("psw").value;
     var confirmPassword = document.getElementById("repsw").value;
     if (password != confirmPassword) {
         alert("Passwords do not match.");
         return false;
     }
     return true;


    }




    </script>






<header>
<div class="container">



<img src="images/logo.png" alt="logo">
<?php include 'connect.php' ?>
<a href="index.html"><span>Go back to home</span></a>
</div>
</header>




    <form class="box" action="upload.php" onsubmit="return valid()" method="post">
  <h1>Sign Up</h1>
  <input type="text" name="name" placeholder="Name" required>
  <input type="text" name="email" placeholder="Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
  <input type="text" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Mobile number" required>
  <input type="password" id="psw" name="psw" placeholder="Password" required>
    <input type="password" id="repsw" name="repsw" placeholder="Confirm password" required>
  <input type="text" name="adress" placeholder="Adress" required>
<br>
<br>

  	<h2>Select Gender</h2>

<div class="radiocontainer">
  <div>
<input type="radio" id="radio01" name="gender" checked />
<label for="radio01"><span></span>  Male </label>
</div>

<div>
<input type="radio" id="radio02" name="gender" />
<label for="radio02"><span></span>Female</label>
</div>
<div>
<input type="radio" id="radio03" name="gender" />
<label for="radio03"><span></span> Other</label>
</div>

    </div>
    <br>

      <div class="date">
        <h2>Date Of Birth</h2>


<input type="date" name="dob"  value="2017-01-01" min="1900-01-01" max="2019-09-21" required>

</div>
</div>
</div>

<h2>Select Your Role(Student/librarian)</h2>

<select name="role" >
  <option value="student">Student</option>
  <option value="librarian">Librarian</option>
</select>



  <input type="submit" name=""  value="Sign Up">
</form>
  </body>
</html>
