
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
          $lemail = $_SESSION['user'];
                    $sql = " SELECT * FROM `librarian` WHERE `emailid`= '$lemail' ";
                    $sqlname=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($sqlname)) {

                            $idid = $row["librarian_id"];
                        }



  echo "<a href=\"editlibrarianself.php?prop_id=". $idid ."\"> Edit </a>";

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
$lemail = $_SESSION['user'];
          $sql = " SELECT * FROM `librarian` WHERE `emailid`= '$lemail' ";
          $sqlname=mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($sqlname)) {
                  echo "Name "."<br>"."<br>".$row["name"]."<br>"."<br>"."<br>";
                  echo "Email "."<br>"."<br>".$row["emailid"]."<br>"."<br>"."<br>";
                  echo "Mobile no"."<br>"."<br>".$row["phone"]."<br>"."<br>"."<br>";
                  echo "Adress "."<br>"."<br>".$row["adress"]."<br>"."<br>"."<br>";
                  echo "DOB "."<br>"."<br>".$row["dob"]."<br>"."<br>"."<br>";
                  echo "Gender"."<br>"."<br>".$row["gender"]."<br>"."<br>"."<br>";
                  echo "Your id "."<br>"."<br>".$row["librarian_id"]."<br>"."<br>"."<br>";
              }

          ?>






        </div>
      </div>
    </div>

    <div class="accordionItem close">
      <h2 class="accordionItemHeading">View and Remove Books</h2>
      <div class="accordionItemContent">

<div class="booktable">




      <table style="width:100%">
 <tr>
<th>Book id</th>
<th>Book Name</th>
<th>Author</th>
<th>Book Type</th>
<th>Status</th>
<th>operations</th>
    </tr>
<?php
$sql = " SELECT * FROM `books` WHERE 1 ";
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
      echo "<a href=\"remove.php?prop_id=".$row["book_id"]."\">Remove </a>";
        echo "</form>"."</td>";

    echo "</tr>";
  }


 ?>




      </table>
</div>

      </div>
    </div>




    <div class="accordionItem close">
      <h2 class="accordionItemHeading">Requests</h2>
      <div class="accordionItemContent">

    <div class="booktable">




      <table style="width:100%">
    <tr>
    <th>Order Id</th>
    <th>Book Id</th>
    <th>Book Name</th>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>Status</th>
    <th>Accept</th>
    <th>Reject</th>
    </tr>
    <?php
    $sql = "SELECT * FROM `bookorders` WHERE `order_status`='requested' ";
    $sqlname=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($sqlname)) {
    echo "<tr>";
    echo "<td>".$row["order_id"]."</td>";
        echo "<td>".$row["book_id"]."</td>";
        echo "<td>".$row["book_name"]."</td>";
        echo "<td>".$row["student_id"]."</td>";
        echo "<td>".$row["student_name"]."</td>";
        echo "<td>".$row["order_status"]."</td>";

        echo "<td>"."<form>";
        echo "<a href=\"accept.php?prop_id=".$row["order_id"]."\">Accept </a>";
        echo "</form>"."</td>";
        echo "<td>"."<form>";
        echo "<a href=\"reject.php?prop_id=".$row["order_id"]."\">Reject</a>";
        echo "</form>"."</td>";



    echo "</tr>";
    }


    ?>




      </table>
    </div>

      </div>
    </div>








    <div class="accordionItem close">
      <h2 class="accordionItemHeading">Add books</h2>
      <div class="accordionItemContent">
        <div class="bookform">

          <form class="formbooks" action=""  method="post">
        <h1>ADD BOOK DETAILS</h1>
        <h3>Book Name</h3>
        <input type="text" name="bookname" placeholder="Name of book" required> <br>
        <h3>Author of the Book</h3>
        <input type="text" name="authorname" placeholder="Name of author" required> <br>
        <h2>Select Type of the Book</h2>
<br>
        <select name="booktype" >
          <option value="autobiography">Autobiography</option>
          <option value="biography">biography</option>
          <option value="novel">Novel</option>
          <option value="stories">Stories</option>
          <option value="poetry">poetry</option>
        </select>
<input type="submit" name="submitbook"  value="ADD BOOK">

</form>
<?php
 if (isset($_POST['submitbook'])) {

  $bname = $_POST['bookname'];
  $bauthor=$_POST['authorname'];
  $btype=$_POST["booktype"];
  $sql = "INSERT INTO `books`
  (`book_id`, `name`, `author`, `status`, `type`)
   VALUES (NULL, '$bname', '$bauthor', 'available', '$btype')";
   if ($conn->query($sql) === TRUE) {
        // echo "<script> alert('book details added successfully') </script>";
       echo '<script LANGUAGE="JavaScript">
       window.alert("book details added successfully");
       window.location.href="dashlibrarian.php";
       </script>';
   }


   else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

}



 ?>




        </div>


      </div>
    </div>
    <div class="accordionItem close">
      <h2 class="accordionItemHeading">View and Edit Students</h2>
      <div class="accordionItemContent">

    <div class="booktable">




      <table style="width:100%">
    <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>phone</th>
    <th>gender</th>

    <th>DOB</th>
    <th>operations</th>
    </tr>
    <?php
    $sql = " SELECT * FROM `student` WHERE 1 ";
    $sqlname=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($sqlname)) {
    echo "<tr>";
    echo "<td>".$row["student_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["emailid"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["gender"]."</td>";

        echo "<td>".$row["dob"]."</td>";
        echo "<td>"."<form>";
        echo "<a href=\"editstudent.php?prop_id=".$row["student_id"]."\">Edit </a>";

    echo "</tr>";
    }


    ?>

    </form>
    </table>
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
