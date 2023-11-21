<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homepage.css">
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
?>

 <div class="site-content">
  <header>
    <h1>Welcome to GSC</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="../Guest/About Us.html">About</a></li>
      <li><a href="../Guest/Contact Us.html">Contact Us</a></li>
	  <li><a href="../Login/login.html">Login</a></li>
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
  echo '<form action="../Guest/viewmoviedetail.php" method="POST" >';
  echo "<p><input type='hidden' value='$name' name='titleToView'></p>";
  echo '<p><input class="buy-button" type="submit" name="viewbutton" value="View"></p>';
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