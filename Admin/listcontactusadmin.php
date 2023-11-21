<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Training List</title>
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
        <h1>Contact Us List</h1>
        <?php
		include "contactus.php";
		echo '<div class="ContactUsList">';
		displaySearchOption();
	
        if(isSet($_POST['searchByname']))
	    $qry = findByName();
        else if(isSet($_POST['searchByEmail']))
	    $qry = findByEmail();
        else
	    $qry = getListOfContactUs();
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
                <tr> 
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
                    <td>Delete</td>
					<td>Deleta All(Same Name)</td>
                </tr>';
				
				$i=1;
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['message'].'</td>';
                        
						$name = $row['name'];
                        $email = $row['email'];
                        $message = $row['message'];						
                //delete menu
                        echo '<td>';
			            echo '<form action="processcontactus.php" method="POST" >';
			            echo "<input type='hidden' value='$name' name='nameToDelete'>";
						echo "<input type='hidden' value='$email' name='emailToDelete'>";
						echo "<input type='hidden' value='$message' name='messageToDelete'>";
			            echo '<input type="submit" name="deleteButton" value="Delete">';
			            echo '</form>';
                        echo '</td>';
						
						echo '<td>';
			            echo '<form action="processcontactus.php" method="POST" >';
			            echo "<input type='hidden' value='$name' name='nameToDelete'>";
			            echo '<input type="submit" name="deleteAllButton" value="Delete">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                        $i++;
                    }
	  
        echo '</table>';
		?>
						
        <a style="color:white;" href="HomepageAdmin.php">Back to Homepage</a>
    </body>
</html>
