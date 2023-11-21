<?php

function SendFgpEmail(){
session_start();
//$_SESSION['email']==$_POST['email'];
$email=$_SESSION['email'];

$message = 'Hi, To reset your password, <a href="http://localhost/SD%20PROJECT/Forgot%20Password/resetpasswordstaff.html">Please Click Here</a>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($email,"Reset Password",$message,$headers);
}
?>