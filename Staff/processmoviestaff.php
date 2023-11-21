<?php

include "../Admin/movie.php";

if(isSet($_POST['deleteButton']))
	{
	deleteMovie();
	echo "<script>";
	echo " alert('Movie has been deleted.');
		   </script>";
	header( "refresh:1; url=viewmoviestaff.php" );
	}
	
if(isSet($_POST['updateMovieButton']))
	{
	updateMovieInformationStaff();
	}

	
?>