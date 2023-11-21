<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Seat List</title>
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
        <h1>Seat List</h1>
        <?php
		include "../Admin/Seat.php";
		echo '<div class="ContactUsList">';
		displaySearchOption();
	
       if (isset($_POST['searchByname'])) {
    $qry = findByName();
    } elseif (isset($_POST['searchByAvailable'])) {
    $qry = findByAvailable();
    } else {
    $qry = getListOfSeat();
    }
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
				<tr> 
                    <td>No</td>
                    <td>Seat Number</td>
                    <td>Is Available (1=Available)</td>
                    <td>Price</td>
					<td>Update</td>
                </tr>';
				
				$i=1;
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row['seatnumber'].'</td>';
                        echo '<td>'.$row['isavailable'].'</td>';
                        echo '<td>'.$row['price'].'</td>';
                        
						$name = $row['seatnumber'];								
						
				//updaate menu
				        echo '<td>';
			            echo '<form action="../Admin/updateseat.php" method="post" >';
			            echo "<input type='hidden' value='$name' name='nameToUpdate'>";
			            echo '<input type="submit" name="updateSeatButtonStaff" value="Update">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                        $i++;
                    }
	  
        echo '</table>';
		?>					
        <a style="color:white;" href="../Staff/HomePageStaff.php">Back to Homepage</a>
    </body>
</html>