<?php
function getAdminInfo($username)
{
$con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$sql = "select * from admin where username='$username' ";
	$qry=mysqli_query($con,$sql);
	return $qry;
}

?>