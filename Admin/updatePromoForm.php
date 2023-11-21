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
include "promo.php";
$id=$_POST['idToUpdate'];
echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processpromo.php" method="post" enctype="multipart/form-data">';
echo '<fieldset><legend>Promotion Information Update:</legend>';
echo '<br>Poster :';
echo "<input type='file' name='poster' value='$poster'>";
echo "<input type='hidden' value='$id' name='idToUpdate'>";
echo '<br><br><input type="submit" name="updatePromoButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';

?>