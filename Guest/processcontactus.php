<?php
include "contactus.php";

if(isSet($_POST['sendcontactbutton']))
{
	sendcontact();
}

if(isSet($_POST['sendcontactbuttoncustomer']))
{
	sendcontactcustomer();
}


?>