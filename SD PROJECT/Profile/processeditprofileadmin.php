<?php
if (isset($_POST['UploadImage'])) {
	header("Location:uploadimageadmin.php");
}

if(isset($_POST['EditProfile'])){
	header("Location:editprofileadmin.php");
}

if(isset($_POST['Back'])){
	header("Location:../Admin/HomePageAdmin.php");
}
?>