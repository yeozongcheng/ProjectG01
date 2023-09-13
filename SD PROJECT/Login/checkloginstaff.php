<?php
include "login.php";
session_start(); 
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

$username=$_POST['username'];
$password=$_POST['password'];

$isValidUser=validatepasswordstaff($username,$password);
if($isValidUser)
	{
		header("Location:../Staff/HomepageStaff.php");
	}else
	{
	echo'<div class="w3-center w3-container" style="width:400px; margin:auto">';
	echo "<center><br><br><div class='w3-center w3-container w3-red w3-margin w3-padding'><b><br>Wrong Username or Password !!!<br><br></b>";
	echo'</div>';
	echo '<br><br><br><a class="w3-text-blue" href="loginstaff.html"><b>Try Again</b></a>';
	}

?>