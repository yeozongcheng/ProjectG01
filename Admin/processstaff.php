<?php

include "staff.php";

if(isSet($_POST['deleteButton']))
	{
	deleteStaff();
	echo "<script>";
	echo " alert('Staff has been deleted.');
		   </script>";
	header( "refresh:1; url=viewstaff.php" );
	}
	
if(isSet($_POST['updateStaffButton']))
	{
	updateStaffInformation();
	header( "refresh:1; url=viewstaff.php" );
	}

	
?>