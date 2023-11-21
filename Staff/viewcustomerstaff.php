<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Customer List</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: black;
            }
            h1{
                text-align: center;
                color: white;
            }
            table{
                margin-left: auto;
                margin-right: auto;;
                background-color: pink;
            }
            .ContactUsList{
                text-align: center;
            }

            fieldset{
                margin-left: auto;
                margin-right: auto;;
                width: 20%;
            }
        


        </style>
    </head>
    <body>
        <h1>Customer List</h1>
        <?php
		include "../Admin/customer.php";
		echo '<div class="ContactUsList">';
		displaySearchOption();
	
        if(isSet($_POST['searchByname']))
	    $qry = findByName(); //call function in car.php
        else if(isSet($_POST['searchByEmail']))
	    $qry = findByEmail(); //call function in car.php
        else
	    $qry = getListOfCustomer();//display all car
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
				<tr> 
                    <td>No</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Avatar</td>
					<td>Delete</td>
					<td>Update</td>
                </tr>';
				
				$i=1;
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row['username'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['password'].'</td>';
						echo '<td><img src="'.$row['avatar'].'"'.'hight="400px" width="400px">'.'</td>';
                        
						$name = $row['username'];
                        $email = $row['email'];			
						
                //delete menu
                        echo '<td>';
			            echo '<form action="../Admin/processcustomer.php" method="POST" >';
			            echo "<input type='hidden' value='$name' name='nameToDelete'>";
						echo "<input type='hidden' value='$email' name='emailToDelete'>";
			            echo '<input type="submit" name="deleteButtonStaff" value="Delete">';
			            echo '</form>';
                        echo '</td>';	
						
				//updaate menu
				        echo '<td>';
			            echo '<form action="updateCustomerFormStaff.php" method="post" >';
			            echo "<input type='hidden' value='$name' name='usernameToUpdate'>";
			            echo '<input type="submit" name="updateStaffButton" value="Update">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                        $i++;
                    }
	  
        echo '</table>';
		?>					
        <a style="color:white;" href="HomepageStaff.php">Back to Homepage</a>
    </body>
</html>