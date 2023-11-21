<?php

include "movie.php";

if(isSet($_POST['deleteButton']))
	{
	deleteMovie();
	echo "<script>";
	echo " alert('Movie has been deleted.');
		   </script>";
	header( "refresh:1; url=viewmovie.php" );
	}
	
if(isSet($_POST['updateMovieButton']))
	{
	updateMovieInformation();
	}

	
?>