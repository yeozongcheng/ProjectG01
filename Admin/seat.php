<?php
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
					<input class="w3-button w3-card-4 w3-hoverblue w3-pink" type=submit name = searchByAvailable value="By Available">
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
$sql = "select * from seat where seatnumber ='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}	

function findByAvailable()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
	$searchValue=$_POST['searchValue'];
$sql = "select * from seat where isavailable ='$searchValue'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getListOfSeat()
{
//create connection
$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	}
$sql = 'select * from seat';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
?>