<?php
function addMenu()
{
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $name = $_POST['name'];
 $price = $_POST['price'];
 $type = $_POST['type'];

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
  header("refresh:1;url=addmenu.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "INSERT INTO menu(name, price, type, avatar) VALUES ('$name', '$price', '$type', '$avatar_path')";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The file has been uploaded and saved to the database.")</script>';
	 header("refresh:1;url=HomePageAdmin.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=addmenu.php");
  }	  
}
}

function getListOfMenu()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from menu';
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
					<input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = searchBytype value="By Type">
                    <input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = displayAll value="Display All"></td>
                </table>
            </fieldset>
        </form>';
    }
function findByName()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$searchValue=$_POST['searchValue'];
$sql = "select * from menu where name ='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}	

function findByType()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$searchValue=$_POST['searchValue'];
$sql = "select * from menu where type ='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function deleteMenu()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

    $name=$_POST['nameToDelete'];
    $sql="delete from menu where name='$name'";
	$qry = mysqli_query($con,$sql);
}	

function getMenuInformation($name)
{
//create connection
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = "select * from menu where name = '".$name."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateMenuInformation(){
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $newname = $_POST['newname'];
 $price = $_POST['price'];
 $type = $_POST['type'];
 $oldname = $_POST['name'];
 

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
  header("refresh:1;url=viewmenu.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE menu SET name='$newname', price='$price', type='$type', avatar='$avatar_path' WHERE name='$oldname'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The menu has been update.")</script>';
	 header("refresh:1;url=viewmenu.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=viewmenu.php");
  }	
 }  

}

function getListOfFood()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$type="food";
$sql = "select * from menu where type='$type'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getListOfDrink()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$type="drink";
$sql = "select * from menu where type='$type'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getListOfCombo()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$type="combo";
$sql = "select * from menu where type='$type'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateMenuInformationStaff(){
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $newname = $_POST['newname'];
 $price = $_POST['price'];
 $type = $_POST['type'];
 $oldname = $_POST['name'];
 

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
  header("refresh:1;url=viewmenustaff.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "UPDATE menu SET name='$newname', price='$price', type='$type', avatar='$avatar_path' WHERE name='$oldname'";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The menu has been update.")</script>';
	 header("refresh:1;url=viewmenustaff.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=viewmenustaff.php");
  }	
 }  

}

function addMenuStaff()
{
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 $name = $_POST['name'];
 $price = $_POST['price'];
 $type = $_POST['type'];

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
  header("refresh:1;url=addmenustaff.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
     $con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	 $avatar_path = $target_file;
     $sql = "INSERT INTO menu(name, price, type, avatar) VALUES ('$name', '$price', '$type', '$avatar_path')";
	 $qry = mysqli_query($con,$sql);
	 echo '<script>alert("The file has been uploaded and saved to the database.")</script>';
	 header("refresh:1;url=HomePageStaff.php");
	 
  }else{
	  echo "Sorry, there was an error during file upload.";
	  header("refresh:1;url=addmenustaff.php");
  }	  
}
}

?>