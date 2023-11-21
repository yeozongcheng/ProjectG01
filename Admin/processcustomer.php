<?php

include "customer.php";

if(isSet($_POST['deleteButton']))
	{
	deleteCustomer();
	echo "<script>";
	echo " alert('Custonmer has been deleted.');
		   </script>";
	header( "refresh:1; url=viewcustomer.php" );
	}
	
if(isSet($_POST['updateCustomerButton']))
	{
	updateCustomerInformation();
	header( "refresh:1; url=viewcustomer.php" );
	}

if(isSet($_POST['deleteButtonStaff']))
	{
	deleteCustomer();
	echo "<script>";
	echo " alert('Custonmer has been deleted.');
		   </script>";
	header( "refresh:1; url=../Staff/viewcustomerstaff.php" );
	}

if(isSet($_POST['updateCustomerButtonStaff']))
	{
	updateCustomerInformation();
	header( "refresh:1; url=../Staff/viewcustomerstaff.php" );
	}
	
	
?>