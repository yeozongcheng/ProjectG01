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
include "../Admin/menu.php";
$name=$_POST['nameToUpdate'];
$qry = getMenuInformation($name);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
$price = $row['price'];
$type =$row['type'];
$poster = $row['avatar'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processmenustaff.php" method="post" enctype="multipart/form-data">';
echo '<fieldset><legend>Menu Information Update:</legend>';
echo ' Name:';
echo "<input type='text' name='newname' value='$name' required>";
echo "<input type='hidden' name='name' value='$name' >";

echo '<br>Price :';
echo "<input type='number' name='price' value='$price'>";

echo '<br>Type :';
echo "<input type='text' name='type' value='$type'>";

echo '<br>Poster :';
echo "<input type='file' name='poster' value='$poster'>";

echo '<br><br><input type="submit" name="updateMenuButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';

?>