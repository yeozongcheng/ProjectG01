<?php
include "../Admin/menu.php";

if(isSet($_POST['buyButton']))
	{
		error_reporting(E_ALL);
        ini_set('display_errors', 1);
		session_start();
		$username = $_SESSION['username'];
		$name=$_POST['nameToBuy'];
		$qry = getMenuInformation($name);//call function to get detail car data
        $row = mysqli_fetch_assoc($qry);
		$itemname=$row['name'];
		$price=$row['price'];
		$status="no";
		$con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");
        
        $sql = "INSERT INTO `order` (username, itemname, price, status) VALUES ('$username', '$itemname', '$price', '$status')";
        mysqli_query($con, $sql);	
        echo "<script>";
	    echo " alert('Food has been book.');
		     </script>";
	    header( "refresh:1; url=HomePageCustomer.php" );		
	}
	

?>