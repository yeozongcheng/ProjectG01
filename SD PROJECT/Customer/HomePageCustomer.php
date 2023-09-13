<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homepageadmin.css">
  <title>Homepage</title>
</head>
<body>
<?php
session_start();
$username=$_SESSION['username'];
   echo '<div class="site-content">';
   echo '<header>';
   echo '<h1>Welcome '.$username.'<h1>';
   echo '</header>';
 ?>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
	  <li><a href="../Profile/viewprofilecustomer.php">Profile</a></li>
      <li><a href="aboutuscustomer.html">About</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
	  <li><a href="../Login/logout.php">Logout</a></li>
    </ul>
  </nav>
  
  <main>
    <section class="content">
    </section>
  </main>
  </div>
  <footer>
    <p>&copy;Copyright 2023 Golden Screen Cinemas 195901000261 (3609-M). All Rights Reserved</p>
  </footer>
</body>
</html>