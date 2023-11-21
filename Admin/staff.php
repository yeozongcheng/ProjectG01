<?php
function getListOfStaff()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from staff';
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
                    <input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = searchByEmail value="By Email">
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
$sql = "select * from staff where username ='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function findByEmail()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$searchValue=$_POST['searchValue'];
$sql = "select * from staff where email='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function deleteStaff()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

 $name = $_POST['nameToDelete'];
 $email = $_POST['emailToDelete'];
  
    $sql="delete from staff where username ='$name' && email='$email'";
	$qry = mysqli_query($con,$sql);
}

function getStaffInformation($username)
{
//create connection
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = "select * from staff where username = '".$username."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateStaffInformation()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
//get the data to update
 $oldusername = $_POST['username'];
 $newusername = $_POST['newusername'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
$sql = "UPDATE staff SET username='$newusername', email='$email', password='$password' WHERE username='$oldusername'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>