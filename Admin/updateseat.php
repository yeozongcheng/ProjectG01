<?php
   if(isSet($_POST['updateSeatButton']))
	{
		error_reporting(E_ALL);
        ini_set('display_errors', 1);
		$name = $_POST['nameToUpdate'];
		$con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");
		$sql = "UPDATE seat SET isavailable=1 WHERE seatnumber='$name'";
        $qry = mysqli_query($con, $sql);
		 echo "<script>";
	     echo " alert('Seat has been update.');
		   </script>";
	     header( "refresh:1; url=viewseat.php" );
	}
	
	   if(isSet($_POST['updateSeatButtonStaff']))
	{
		error_reporting(E_ALL);
        ini_set('display_errors', 1);
		$name = $_POST['nameToUpdate'];
		$con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");
		$sql = "UPDATE seat SET isavailable=1 WHERE seatnumber='$name'";
        $qry = mysqli_query($con, $sql);
		 echo "<script>";
	     echo " alert('Seat has been update.');
		   </script>";
	     header( "refresh:1; url=../Staff/viewseatstaff.php" );
	}
	
?>