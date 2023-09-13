<?php
function UpdateProfileAdmin()
{
	session_start();
	$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
	
	$username=$_SESSION['username'];
	$newpassword=$_POST['newpassword'];
	$email=$_POST['email'];
	$repassword=$_POST['repassword'];
	$newemail=$_POST['newemail'];
	
		$sql="select * from admin where email='$email' && username='$username'" ;
        $result = mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);	
		
		
		if(($count==1) && ($newpassword==$repassword)){
		$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
		$sql = "update admin SET password='$newpassword', email='$newemail' WHERE username='$username' && email='$email'";
	    $qry=mysqli_query($con,$sql);
		echo "<script>";
	    echo " alert('Password and Email have been changed');
		  </script>";
		header( "refresh:1; url=viewprofileadmin.php" );
		}else
	    {
		echo "<script>";
	    echo " alert('Password and Confirm Password Are Not Same OR  Email Wrong!!!');
		  </script>";
		 header( "refresh:1; url=editprofileadmin.php" ); 	 
		}

}
?>