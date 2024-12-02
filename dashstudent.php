
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <title>dash</title>
<link rel="stylesheet" href="css/dash.css">


  </head>
  <body>







<?php
include 'connect.php';

  ?>
<header class='masthead'>
  <div class='brand-container'>
    <a href='#'>
      <span class='brand-initials'>LIB</span>
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
          <?php
          $lemail = $_SESSION['username'];
                    $sql = " SELECT * FROM `student` WHERE `emailid`= '$lemail' ";
                    $sqlname=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($sqlname)) {

                            $idid = $row["student_id"];
                        }



  echo "<a href=\"editstudentself.php?prop_id=". $idid ."\"> Edit </a>";

           ?>
        <a href='logout.php'>Log out</a>
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




<div class="right">



<div class="accordionWrapper">
<div class="accordionItem open">
      <h2 class="accordionItemHeading">Profile view</h2>
      <div class="accordionItemContent">
        <div class="profile">

<?php
$lemail = $_SESSION['username'];
          $sql = " SELECT * FROM `student` WHERE `emailid`= '$lemail' ";
          $sqlname=mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($sqlname)) {
                  echo "Name "."<br>"."<br>".$row["name"]."<br>"."<br>"."<br>";
                  echo "Email "."<br>"."<br>".$row["emailid"]."<br>"."<br>"."<br>";
                  echo "Mobile no"."<br>"."<br>".$row["phone"]."<br>"."<br>"."<br>";
                  echo "Adress "."<br>"."<br>".$row["adress"]."<br>"."<br>"."<br>";
                  echo "DOB "."<br>"."<br>".$row["dob"]."<br>"."<br>"."<br>";
                  echo "Gender"."<br>"."<br>".$row["gender"]."<br>"."<br>"."<br>";
                  echo "Your id "."<br>"."<br>".$row["student_id"]."<br>"."<br>"."<br>";
                  $idid=$row["student_id"];
              }

          ?>






        </div>
      </div>
    </div>

    <div class="accordionItem close">
      <h2 class="accordionItemHeading">View and Request Books(max: 3 books )  </h2>
      <div class="accordionItemContent">

  <div class="booktable">




      <table style="width:100%">
  <tr>
  <th>Book id</th>
  <th>Book Name</th>
  <th>Author</th>
  <th>Book Type</th>
  <th>Status</th>
  <th>Request</th>
    </tr>
  <?php

  $sql3 = " SELECT * FROM `student` WHERE `emailid`= '$lemail' ";
  $sqlname=mysqli_query($conn,$sql3);
  while($row3 = mysqli_fetch_assoc($sqlname)) {
 $req=$row3['maxreq'];
}


  $sql = " SELECT * FROM `books` WHERE `status`='available' ";
  $sqlname=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($sqlname)) {
  echo "<tr>";
  echo "<td>".$row["book_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["author"]."</td>";
        echo "<td>".$row["type"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>"."<form>";
        // echo "<form action='remove.php' method='post'>";
        // echo "<input type='submit' name='". $row["employee_id"]  ."' value='Remove' >";
      if ($req >= 1) {
        echo "<a href=\"bookrequest.php?prop_id=".$row["book_id"]."\">Send Request  </a>";

      }
          else {

echo "Cannot request";


          }
        echo "</form>"."</td>";

    echo "</tr>";
  }


  ?>




      </table>
  </div>

      </div>
    </div>



    <div class="accordionItem close">
      <h2 class="accordionItemHeading">Requested Books and Accepted Books</h2>
      <div class="accordionItemContent">
<div class="booktable">

  <table style="width:100%">
<tr>
<th>request id</th>
<th>Book Name</th>
<th>book_id</th>
<th>order_status</th>
</tr>
<?php

$sql = " SELECT * FROM `bookorders` WHERE `student_id`='$idid' ";
$sqlname=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($sqlname)) {
echo "<tr>";
echo "<td>".$row["order_id"]."</td>";
      echo "<td>".$row["book_name"]."</td>";
      echo "<td>".$row["book_id"]."</td>";
      echo "<td>".$row["order_status"]."</td>";

}









 ?>




</div>
      </div>
    </div>
</div>
<script type="text/javascript">


var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }



</script>



</div>
</body>
</html>
