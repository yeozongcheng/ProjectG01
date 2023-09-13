<?php
function sendcontact()
{
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");   
    
     if(!$con){
		 echo mysqli_connect_error;
	 }else
	 {
		 $name=$_POST['name'];
         $email=$_POST['email'];
         $message=$_POST['message'];
         $sql="INSERT INTO contactus(name,email,message)VALUES('$name', '$email', '$message')";
         mysqli_query($con,$sql);
		 echo "<script> alert('Contact has been sended.')</script>";
	     header('refresh:1; url=Contact Us.html');
	 }
	 
}

function sendcontactcustomer()
{
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");   
    
     if(!$con){
		 echo mysqli_connect_error;
	 }else
	 {
		 $name=$_POST['name'];
         $email=$_POST['email'];
         $message=$_POST['message'];
         $sql="INSERT INTO contactus(name,email,message)VALUES('$name', '$email', '$message')";
         mysqli_query($con,$sql);
		 echo "<script> alert('Contact has been sended.')</script>";
	     header('refresh:1; url=../Customer/contactus.html');
	 }
	 
}
?>