<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homepagestaff.css">
  <style>
    /* Add CSS styling for the movie container */
    .movie-container {
      display: flex; /* Use flex layout for positioning */
      margin: 10px;
      max-width: 600px; /* Limit maximum width */
      position: relative; /* Enable relative positioning for button */
    }

    /* Style the movie image */
    .movie-image {
      max-width: 500px; /* Set the maximum width for the image */
      height: 500px;
      margin-right: 20px; /* Add spacing to the right of the image */
    }

    /* Style the movie info (hidden by default) */
    .movie-info {
     background-color: rgba(255, 255, 255, 0.8);
     padding: 10px;
     display: none;
     text-align: center;
     position: absolute;
     top: 0;
     left: 0;
     width: 500px; /* Set the width to max content */
     height: 500px; /* Set the height to max content */
     z-index: 1;
     }

    /* Define hover effect for movie-container */
    .movie-container:hover .movie-info {
      display: block; /* Show movie info on hover */
    }

    /* Style the Buy button */
    .buy-button {
      position: absolute; /* Enable absolute positioning */
      bottom: 10px; /* Position at the bottom */
      right: 10px; /* Position at the right */
      background-color: #333;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
  <title>Homepage</title>
</head>
<body>
<?php
include "../Admin/movie.php";
include "../Admin/promo.php";
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
	  <li><a href="../Profile/viewprofilestaff.php">Profile</a></li>
      <li><a href="aboutusstaff.html">About</a></li>
      <li><a href="listcontactusstaff.php">Contact Us</a></li>
	  <li><a href="addmoviestaff.html">Add Movie</a></li>
	  <li><a href="viewmoviestaff.php">View Movie</a></li>
	  <li><a href="addpromostaff.html">Add Promotion</a></li>
	  <li><a href="viewpromostaff.php">View Promotion</a>
	  <li><a href="viewcustomerstaff.php">View Customer</a></li>
	  <li><a href="addmenustaff.php">Add Menu</a></li>
	  <li><a href="viewmenustaff.php">View Menu</a></li>
	  <li><a href="viewseatstaff.php">View Seat</a></li>
	  <li><a href="viewbookingstaff.php">View Booking</a></li>
	  <li><a href="../Login/logout.php">Logout</a></li>
    </ul>
  </nav>
  
<h1>Showtime</h1>
<?php
$qry = getListOfMovie();
while ($row = mysqli_fetch_assoc($qry)) {
  $name = $row['title'];
  echo '<div class="movie-container">';
  echo '<img class="movie-image" src="' . $row['poster'] . '" alt="' . $row['title'] . '">';
  echo '<div class="movie-info">';
  echo "<p>Title: {$row['title']}</p>";
  echo "<p>Director: {$row['director']}</p>";
  echo "<p>Release Date: {$row['releasedate']}</p>";
  echo "<p>Time: {$row['time']}</p>";
  echo "<p>Genre: {$row['genre']}</p>";
  echo '<form action="viewmoviedetailstaff.php" method="POST" >';
  echo "<p><input type='hidden' value='$name' name='titletoview'></p>";
  echo '<p><input class="buy-button" type="submit" name="buybutton" value="View"></p>';
  echo '</form>';
  echo '</div>';
  echo '</div>';
}
?>

 <h1>Promotion</h1>
 
<?php
$qry = getListOfPromo();
while ($row = mysqli_fetch_assoc($qry)) {
  $name = $row['title'];
  echo '<div class="movie-container">';
  echo '<img class="movie-image" src="' .$row['poster'].'">';
  echo '</form>';
  echo '</div>';
  echo '</div>';
}
?>
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