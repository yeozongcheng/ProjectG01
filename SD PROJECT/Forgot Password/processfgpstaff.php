<?php
include "fgpstaff.php";
session_start();
$_SESSION['email']=$_POST['email'];
$email=$_SESSION['email'];

if(isSet($_POST['fgpbutton'])){
	SendFgpEmail();
	echo "<script> alert('Email has been sended.')</script>";
	header('refresh:1; url=fgpstaff.html');
	
	}	
?>