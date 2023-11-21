<?php
include "resetpasswordcustomer.php";
if(isSet($_POST['resetButton'])){
	resetPassword();
}
?>