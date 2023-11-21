<?php

include "promo.php";

if(isSet($_POST['deleteButton']))
	{
	deletePromo();
	echo "<script>";
	echo " alert('Promotion has been deleted.');
		   </script>";
	header( "refresh:1; url=viewpromo.php" );
	}
	

if(isSet($_POST['updatePromoButton']))
	{
	updatePromoInformation();
	}
	
if(isSet($_POST['deleteButtonStaff']))
	{
	deletePromo();
	echo "<script>";
	echo " alert('Promotion has been deleted.');
		   </script>";
	header( "refresh:1; url=../Staff/viewpromostaff.php" );
	}
	
if(isSet($_POST['updatePromoButtonStaff']))
	{
	updatePromoInformationStaff();
	}
?>