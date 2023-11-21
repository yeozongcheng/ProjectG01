<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu</title>
  <style>
    nav {
      background-color: #444;
      color: white;
      text-align: center;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      padding: 1rem;
    }

    nav ul li {
      margin: 0 1rem;
    }

    nav a {
      text-decoration: none;
      color: white;
    }

    .menu-item {
      display: flex;
      align-items: center;
      margin: 10px;
    }

    .menu-image {
      max-width: 400px;
      max-height: 400px;
    }

    .menu-info {
      padding: 10px;
    }
  </style>
</head>
<body>
<h1>Menu</h1>
<nav>
  <ul>
    <li><a href="HomePageCustomer.php">Home</a></li>
    <li><a href="viewmenu.php">All</a></li>
    <li><a href="viewfood.php">Food</a></li>
    <li><a href="viewdrink.php">Drink</a></li>
	<li><a href="viewcombo.php">Combo</a></li>
  </ul>
</nav>

<?php
include "../Admin/menu.php";
$qry = getListOfFood();
while ($row = mysqli_fetch_assoc($qry)) {
  echo '<div class="menu-item">';
  echo '<img src="' . $row['avatar'] . '" class="menu-image">';
  echo '<div class="menu-info">';
  echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
  echo "<p><strong>Price:</strong> " . $row['price'] . "</p>";
  echo "<p><strong>Type:</strong> " . $row['type'] . "</p>";
  $name = $row['name'];
  echo '<form action="processmenucustomer.php" method="POST">';
  echo "<input type='hidden' value='$name' name='nameToBuy'>";
  echo '<input type="submit" name="buyButton" value="Buy">';
  echo '</form>';
  echo '</div>';
  echo '</div>';
}
?>
</body>
</html>
