<?php
include "resetpasswordadmin.php";
if(isSet($_POST['resetButton'])){
	resetPassword();
}
?>