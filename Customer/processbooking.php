<?php
include "booking.php";

if(isSet($_POST['book']))
	{
	addbookingseat();
    echo "<script>";
	echo " alert('Ticket has been book.');
		   </script>";
	header( "refresh:1; url=HomePageCustomer.php" );
	}
	
if(isSet($_POST['paybutton']))
	{
	updatestatus();
	header( "refresh:1; url=https://buy.stripe.com/test_3cs02j1SN6v38CI8ww" );
	}
	
if(isSet($_POST['deleteButton']))
	{
	deletebooking();
    echo "<script>";
	echo " alert('Booking has been book.');
		   </script>";
	header( "refresh:1; url=viewcart.php" );
	}
	
if(isSet($_POST['deleteButtonAdmin']))
	{
	deletebooking();
    echo "<script>";
	echo " alert('Booking has been book.');
		   </script>";
	header( "refresh:1; url=../Admin/viewbookingadmin.php" );
	}
	
if(isSet($_POST['deleteButtonStaff']))
	{
	deletebooking();
    echo "<script>";
	echo " alert('Booking has been book.');
		   </script>";
	header( "refresh:1; url=../Staff/viewbookingstaff.php" );
	}
?>