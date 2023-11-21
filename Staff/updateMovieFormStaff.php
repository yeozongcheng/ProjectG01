<style>
	body{
		 background-color:#e6fff2;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>

<?php
include "../Admin/movie.php";
$title=$_POST['titleToUpdate'];
$qry = getMovieInformation($title);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
$director = $row['director'];
$releasedate =$row['releasedate'];
$time = $row['time'];
$genre =$row['genre'];
$poster = $row['poster'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processmoviestaff.php" method="post" enctype="multipart/form-data">';
echo '<fieldset><legend>Movie Information Update:</legend>';
echo 'Registration Title:';
echo "<input type='text' name='newtitle' value='$title' required>";
echo "<input type='hidden' name='title' value='$title' >";

echo '<br>Director :';
echo "<input type='text' name='director' value='$director'>";

echo '<br>Relase Date :';
echo "<input type='date' name='releasedate' value='$releasedate'>";

echo '<br>Time :';
echo "<input type='time' name='time' value='$time'>";

echo '<br>Genre :';
echo "<input type='text' name='genre' value='$genre'>";

echo '<br>Poster :';
echo "<input type='file' name='poster' value='$poster'>";

echo '<br><br><input type="submit" name="updateMovieButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';

?>