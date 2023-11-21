<?php

include "../Admin/menu.php";

if(isSet($_POST['addButton']))
	{
	addMenuStaff();
	}

if(isSet($_POST['deleteButton']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('Menu has been deleted.');
		   </script>";
	header( "refresh:1; url=viewmenustaff.php" );
	}

if(isSet($_POST['updateMenuButton']))
	{
	updateMenuInformationStaff();
	}

?>