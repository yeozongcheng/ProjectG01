<?php
if (isset($_POST['UploadImage'])) {
	header("Location:uploadimagecustomer.php");
}

if(isset($_POST['EditProfile'])){
	header("Location:editprofilecustomer.php");
}

if(isset($_POST['Back'])){
	header("Location:../Customer/HomePageCustomer.php");
}
?>