<?php
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $title = $_POST['title'];
 $director = $_POST['director'];
 $release_date = $_POST['date'];
 $time = $_POST['time'];
 $genre = $_POST['genre'];
 

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
  header("refresh:1;url=addmoviestaff.html");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "INSERT INTO movie(title, director, releasedate, time, genre, poster) VALUES ('$title', '$director', '$release_date', '$time', '$genre', '$avatar_path')";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The file has been uploaded and saved to the database.")</script>';
	 header("refresh:1;url=HomePageStaff.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=addmoviestaff.html");
  }	  
}

?>