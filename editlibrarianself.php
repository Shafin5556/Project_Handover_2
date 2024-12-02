
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dash</title>
<link rel="stylesheet" href="css/dash.css">


  </head>
  <body>

    <?php
    include 'connect.php';


    $prop_id = $_REQUEST['prop_id'];



    $sql="SELECT * FROM `librarian` WHERE `librarian_id`='$prop_id';";
    $sqlname = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($sqlname)) {
      $id= $row["librarian_id"];
      $name= $row["name"];
    $dob=  $row["dob"];
    $gender= $row["gender"];
    $phone=$row["phone"];
    $email=$row["emailid"];
    $adress=$row["adress"];
      }



     ?>

<header class='masthead'>
  <div class='brand-container'>
    <a href='#'>
      <span class='brand-initials'>L.M.S</span>
      <span class='brand-name'>JJ Online Library</span>
    </a>
  </div>
  <nav>
    <div class='nav-container'>
      <div>
        <input id='slider1' name='slider1' type='checkbox'>
        <label class='slide has-child' for='slider1'>
          <span class='element'>Profile</span>
          <span class='name'>Profile view / Edit </span>
        </label>
        <div class='child-menu'>
          <a href='#'>View Profile</a>
          <a href='#'>Edit Profile</a>
          <a href='index.html'>Log out</a>
        </div>
      </div>
      <div>
        <a class='slide' href='#'>
          <span class='element'>Po</span>
          <span class='name'>Portfolio</span>
        </a>
      </div>
      <div>
        <input id='slider2' name='slider2' type='checkbox'>
        <label class='slide has-child' for='slider2'>
          <span class='element'>Xp</span>
          <span class='name'>Laboratory</span>
        </label>
        <div class='child-menu'>
          <a href='#'>PHP</a>
          <a href='#'>Javascript</a>
          <a href='#'>Css</a>
          <a href='#'>Ruby</a>
          <a href='#'>Python</a>
          <a href='#'>Design</a>
        </div>
      </div>
      <div>
        <a class='slide' href='#'>
          <span class='element'>Ab</span>
          <span class='name'>About</span>
        </a>
      </div>
      <div>
        <a class='slide' href='#'>
          <span class='element'>C</span>
          <span class='name'>Contact</span>
        </a>
      </div>
    </div>
  </nav>
  <div class='social-container'>
    <span>
      <a class='social-roll github' href='#'></a>
    </span>
    <span>
      <a class='social-roll twitter' href='#'></a>
    </span>
    <span>
      <a class='social-roll linkedin' href='#'></a>
    </span>
    <span>
      <a class='social-roll rss' href='#'></a>
    </span>
  </div>
</header>
<div class="edit">


  <form class="edit" action="" method="post" enctype="multipart/form-data">
    <label for="name">Name</label>
  <input type="text" name="name" value="<?php echo $name; ?>">
  <br>
  <br>
  <br><br>
  <label for="dob">DOB</label>
  <input type="date" name="dob"  value="<?php echo $dob; ?>">
  <br>
  <br>
  <br>
  <br>


  <label for="address">Address</label>
  <input type="text" name="adress"  value="<?php echo $adress; ?>">
  <br>
  <br>
  <br>
  <br>
  <label for="phone">Phone</label>
  <input type="text" name="phone"  value="<?php echo $phone; ?>">
  <br>
  <br>
  <br>
  <br>
  <label for="gender">Gender</label>
  <?php
  if ($gender=='male') {
    // code...

  echo '<input type="radio" name="gender" value="male" checked> Male<br>';
  echo "<br>";

  echo ' <input type="radio" name="gender" value="female"> Female<br>';
   echo '<br>';

  echo ' <input type="radio" name="gender" value="other"> Other';
  }
  elseif ($gender=='female') {
    echo '<input type="radio" name="gender" value="male" > Male<br>';
    echo "<br>";

    echo ' <input type="radio" name="gender" value="female" checked > Female<br>';
     echo '<br>';

    echo ' <input type="radio" name="gender" value="other"> Other';


  }
  else {

    echo '<input type="radio" name="gender" value="male" > Male<br>';
    echo "<br>";

    echo ' <input type="radio" name="gender" value="female"  > Female<br>';
     echo '<br>';

    echo ' <input type="radio" name="gender" value="other" checked> Other';

  }
  ?>


  <input type="submit" name="submit" value="SUBMIT">

</form>
<?php
if(isset($_POST["submit"])) {
  $newname=$_POST['name'];
  $newdob=$_POST['dob'];
  $newgender=$_POST['gender'];
    $newphone=$_POST['phone'];
  $newadress=$_POST['adress'];

  $san="UPDATE librarian SET name ='$newname' , dob='$newdob' , gender='$newgender' , adress='$newadress'  WHERE `librarian_id`='$prop_id'" ;
  $sqlrun=mysqli_query($conn,$san);
   header("Location:dashlibrarian.php");

}



?>








</div>









</body>
</html>
