<?php
function getListOfMovie()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from movie';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function displaySearchOption()
    {
        echo 
        '<form action="" method="post"><br>
            <fieldset style ="text-align: center;"><legend style="color: white"; >Search Option</legend>
                <table border=1>
                    <tr>
                    <td> Search:</td>
                    <td><input type=text name=searchValue><br></td>
                    </tr>
                    <td></td>  
                    <td><input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = searchByname value="By Name">
                    <input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = displayAll value="Display All"></td>
                </table>
            </fieldset>
        </form>';
    }
	
function getMovieInformation($title)
{
//create connection
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = "select * from movie where title = '".$title."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateMovieInformation(){
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $newtitle = $_POST['newtitle'];
 $director = $_POST['director'];
 $release_date = $_POST['releasedate'];
 $time = $_POST['time'];
 $genre = $_POST['genre'];
 $oldtitle = $_POST['title'];
 

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
  header("refresh:1;url=viewmovie.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE movie SET title='$newtitle', director='$director', time='$time', releasedate='$release_date', genre='$genre', poster='$avatar_path' WHERE title='$oldtitle'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The movie has been update.")</script>';
	 header("refresh:1;url=viewmovie.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=viewmovie.php");
  }	
 }  

}

function deleteMovie()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

 $title=$_POST['titleToDelete'];
  
    $sql="delete from movie where title='$title'";
	$qry = mysqli_query($con,$sql);
}

function updateMovieInformationStaff(){
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $newtitle = $_POST['newtitle'];
 $director = $_POST['director'];
 $release_date = $_POST['releasedate'];
 $time = $_POST['time'];
 $genre = $_POST['genre'];
 $oldtitle = $_POST['title'];
 

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
  header("refresh:1;url=../Staff/viewmoviestaff.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE movie SET title='$newtitle', director='$director', time='$time', releasedate='$release_date', genre='$genre', poster='$avatar_path' WHERE title='$oldtitle'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The movie has been update.")</script>';
	 header("refresh:1;url=../Staff/viewmoviestaff.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=viewmovie.php");
  }	
 }  

}

?>