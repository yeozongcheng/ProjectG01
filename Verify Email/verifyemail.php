<?php
function SendVerifyEmail(){
session_start();
//$_SESSION['email']==$_POST['email'];
$email=$_SESSION['email'];

$message = 'Hi, To verify your email and register an account, <a href="http://localhost/SD%20PROJECT/Guest/register.html">Please Click Here</a>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($email,"Verify Email And Create Account",$message,$headers);
}
?>