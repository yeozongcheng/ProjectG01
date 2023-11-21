<?php
include "updateprofilecustomer.php";

if(isSet($_POST['change']))
{
	UpdateProfileCustomer();
}

?>