<?php
session_start();
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
	/*
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    //echo "File is not an image.";
    $uploadOk = 0;
  }
  */
//}

// Check if file already exists
/*if (file_exists($target_file)) {
  echo '<script>alert("Sorry, file already exists.")</script>';
  $uploadOk = 0;
}*/

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
  header("refresh:1;url=uploadimagestaff.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
	 $username=$_SESSION['username'];
     $sql = "UPDATE staff SET avatar = '$avatar_path' WHERE username = '$username'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The file has been uploaded and saved to the database.")</script>';
	 header("refresh:1;url=viewprofilestaff.php");
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=uploadimagestaff.php");
  }	  
}
?>