<?php

include "contactus.php";

if(isSet($_POST['deleteButton']))
	{
	deleteContact();
	echo "<script>";
	echo " alert('Contact has been deleted.');
		   </script>";
	header( "refresh:1; url=listcontactusadmin.php" );
	}

if(isSet($_POST['deleteAllButton']))
	{
	deleteAllContact();
	echo "<script>";
	echo " alert('Contact has been deleted.');
		   </script>";
	header( "refresh:1; url=listcontactusadmin.php" );
	}
	
	if(isSet($_POST['deleteButtonStaff']))
	{
	deleteContact();
	echo "<script>";
	echo " alert('Contact has been deleted.');
		   </script>";
	header( "refresh:1; url=../Staff/listcontactusstaff.php" );
	}

if(isSet($_POST['deleteAllButtonStaff']))
	{
	deleteAllContact();
	echo "<script>";
	echo " alert('Contact has been deleted.');
		   </script>";
	header( "refresh:1; url=../Staff/listcontactusstaff.php" );
	}
	
?>