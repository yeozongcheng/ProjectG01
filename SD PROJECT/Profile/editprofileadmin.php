<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="editprofile.css">
</head>
<body>
    <div class="container">
        <h1>Edit Admin Profile</h1>
        <form action="processupdateprofileadmin.php" method="POST">	
			<label for="password">New Password:</label>
            <input type="password" id="newpassword" name="newpassword" placeholder="New Password" required>
			
            <label for="repassword">Confirm Password:</label>
            <input type="password" id="brepassword" name="repassword" placeholder="Confirm Password">
			
			<label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
			
			<label for="email">New Email:</label>
            <input type="email" id="newemail" name="newemail" placeholder="New Email" required>
            <br>
			<br>
            <input type="submit" name="change" value="Save Change">
        </form>
    </div>
</body>
</html>
