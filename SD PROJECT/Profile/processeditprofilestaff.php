<?php
if (isset($_POST['UploadImage'])) {
	header("Location:uploadimage.php");
}

if(isset($_POST['EditProfile'])){
	header("Location:editprofilestaff.php");
}

if(isset($_POST['Back'])){
	header("Location:../Staff/HomePageStaff.php");
}
?>