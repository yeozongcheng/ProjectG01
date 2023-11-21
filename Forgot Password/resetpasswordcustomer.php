<?php
function resetPassword(){
	session_start();
	$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$username=$_POST['username'];
	$password=$_POST['newpassword'];
	$repassword=$_POST['confirmpassword'];
	$email=$_SESSION['email'];
	
	$sql="select * from customer where email='$email' &&  username='$username'";
    $result = mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if(($count==1) && ($password==$repassword))
	{
		$sql="UPDATE customer SET password ='$password' WHERE email ='$email' && username='$username'";
		mysqli_query($con,$sql);
		echo "<script> alert('Password has been changed.')</script>";
	    header( "refresh:1; url=../Login/login.html" );
	}else
	{
	echo "<script>";
	echo " alert('Password and Confirm Password Are Not Same OR Username or email Wrong!!!');
		   </script>";
	header( "refresh:1; url=resetpasswordcustomer.html" );
	}
}
?>