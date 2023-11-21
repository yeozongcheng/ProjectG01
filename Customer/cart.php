<?php
function getListOfCart()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from `order` WHERE status="no"';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getListOfHistory()
{
session_start();
$username = $_SESSION['username'];	
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = "select * from `order` WHERE status='yes' && username='$username'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getListOfBooking()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from `order` WHERE status="yes"';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>