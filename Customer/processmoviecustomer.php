<?php

include "movie.php";

	
if(isSet($_POST['seatbutton']))
	{
		header("Location: selectseat.php");
	}
?>