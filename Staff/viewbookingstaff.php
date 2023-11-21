<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Booking List</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            h1{
                text-align: center;
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
        <h1>Booking List Staff</h1>
        <?php
		include "../Customer/cart.php";
		echo '<div class="ContactUsList">';
        
	    $qry = getListOfBooking();
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
                <tr> 
                    <td>No</td>
                    <td>Username</td>
                    <td>Itemname</td>
                    <td>Price</td>
                    <td>Delete</td>
                </tr>';
				
                while($row=mysqli_fetch_assoc($qry))
                    {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['username'].'</td>';
                        echo '<td>'.$row['itemname'].'</td>';
                        echo '<td>'.$row['price'].'</td>';
                        
						$id = $row['id'];					
                //delete menu
                        echo '<td>';
			            echo '<form action="../Customer/processbooking.php" method="POST" >';
			            echo "<input type='hidden' value='$id' name='idToDelete'>";
			            echo '<input type="submit" name="deleteButtonStaff" value="Delete">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                    }
	  
        echo '</table>';
		echo '</br>'
		?>
		 <br>
		 <a href="HomePageStaff.php">Home</a>
    </body>
</html>