<?php

include "menu.php";

if(isSet($_POST['addButton']))
	{
	addMenu();
	}

if(isSet($_POST['deleteButton']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('Menu has been deleted.');
		   </script>";
	header( "refresh:1; url=viewmenu.php" );
	}

if(isSet($_POST['updateMenuButton']))
	{
	updateMenuInformation();
	}

?>