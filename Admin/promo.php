<?php
function getListOfPromo()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from promotion';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function deletePromo()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

 $id=$_POST['idToDelete'];
  
    $sql="delete from promotion where id='$id'";
	$qry = mysqli_query($con,$sql);
}

function updatePromoInformation()
{

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$id=$_POST['idToUpdate'];

// Check file size
if ($_FILES["poster"]["size"] > 500000) {
  echo '<script>"alert(Sorry, your file is too large.")</script>';
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo'<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
  header("refresh:1;url=viewpromo.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE promotion SET poster='$avatar_path' WHERE id='$id'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The promotion has been update.")</script>';
	 header("refresh:1;url=viewpromo.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=viewpromo.php");
  }	
 }
} 

function updatePromoInformationStaff()
{

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$id=$_POST['idToUpdate'];

// Check file size
if ($_FILES["poster"]["size"] > 500000) {
  echo '<script>"alert(Sorry, your file is too large.")</script>';
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo'<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</script>";
  header("refresh:1;url=../Staff/viewpromostaff.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE promotion SET poster='$avatar_path' WHERE id='$id'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The promotion has been update.")</script>';
	 header("refresh:1;url=../Staff/viewpromostaff.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=../Staff/viewpromostaff.php");
  }	
 }
} 
?>