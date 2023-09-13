<?php
include "verifyemail.php";
session_start();
$_SESSION['email']=$_POST['email'];
$email=$_SESSION['email'];

if(isSet($_POST['verifybutton'])){
	SendVerifyEmail();
	echo "<script> alert('Email has been sended.')</script>";
	header('refresh:1; url=verifyemail.html');
	}
	
?>