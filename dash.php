
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dash</title>
<link rel="stylesheet" href="css/dash.css">


  </head>
  <body>

<?php include 'connect.php' ?>

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
</body>
</html>
