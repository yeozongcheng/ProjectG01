<?php
function getListOfContactUs()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from contactus';
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
$sql = "select * from contactus where name ='$searchValue'";
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
$sql = "select * from contactus where email='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function deleteContact()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

 $name = $_POST['nameToDelete'];
 $email = $_POST['emailToDelete'];
 $message = $_POST['messageToDelete'];
  
    $sql="delete from contactus where name ='$name' && email='$email' && message='$message'";
	$qry = mysqli_query($con,$sql);
}

function deleteAllContact()
{
$con = mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo mysqli_connect_error();
	}

 $name = $_POST['nameToDelete'];
  
    $sql="delete from contactus where name ='$name'";
	$qry = mysqli_query($con,$sql);
}
?>