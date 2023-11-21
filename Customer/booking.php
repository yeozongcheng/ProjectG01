<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function addbookingseat()
{
    session_start();
    $con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");

    if (!$con) {
        echo mysqli_connect_error();
    }

    $title = $_POST['title'];
    $seat = $_POST['seat'];
    $username = $_SESSION['username'];
    $price = 20;
    $status = "no";

    $sql = "INSERT INTO `order` (username, itemname, price, status) VALUES ('$username', '$seat', '$price', '$status')";
    mysqli_query($con, $sql);
	 $sql2 = "UPDATE seat SET isavailable=0 WHERE seatnumber='$seat'";
     $qry2 = mysqli_query($con, $sql2);
}

function updatestatus()
{
	session_start();
	$username = $_SESSION['username'];
	$status="no";
    $con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");
	$sql = "UPDATE `order` SET status='yes' WHERE username='$username' && status='$status'";
	$qry = mysqli_query($con,$sql);
}

function deletebooking()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}
    $id = $_POST['idToDelete'];
    $sql="delete from `order` where id='$id'";
	$qry = mysqli_query($con,$sql);
}	

?>
