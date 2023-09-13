<?php
include "resetpasswordstaff.php";
if(isSet($_POST['resetButton'])){
	resetPassword();
}
?>