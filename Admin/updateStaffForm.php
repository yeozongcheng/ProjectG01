<style>
	body{
		 background-color:#e6fff2;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>

<?php
include "staff.php";
$username=$_POST['usernameToUpdate'];
$qry = getStaffInformation($username);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
$email = $row['email'];
$password =$row['password'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processstaff.php" method="post">';
echo '<fieldset><legend>Staff Information Update:</legend>';
echo 'Registration Username:';
echo "<input type='text' name='newusername' value='$username' required>";
echo "<input type='hidden' name='username' value='$username' >";

echo '<br>Email :';
echo "<input type='email' name='email' value='$email'>";

echo '<br>Password :';
echo "<input type='password' name='password' value='$password'>";

echo '<br><br><input type="submit" name="updateStaffButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';

?>