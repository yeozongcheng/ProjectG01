<?php
session_start();
include "customer.php";
$username=$_SESSION['username'];
$qry=getCustomerInfo($username);
$row=mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="profileadmin.css">
    <title>User Profile</title>
</head>
<body>

    <header>
        <h1>Customer Profile</h1>
    </header>
	<img class="avatar" src="<?php echo $row['avatar']; ?>">
    <p><strong>Username:</strong> <?php echo $row['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
	<br>
	<form action="processeditprofilecustomer.php" method="POST">
	    <div class="button-container">
        <input type="submit" name="UploadImage" value="Upload">
		<span class="button-separator"></span>
        <input type="submit" name="EditProfile" value="Edit Profile">
        </div>
        <input type="submit" name="Back" value="Home">
	</form>
</body>
</html>