<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Promotion List</title>
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
        <h1>Promotion List</h1>
        <?php
		include "promo.php";
		echo '<div class="ContactUsList">';

	    $qry = getListOfPromo();//display all car
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
				<tr> 
                    <td>No</td>
					<td>Poster</td>
					<td>Delete</td>
					<td>Update</td>
                </tr>';
				
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
						echo '<td><img src="'.$row['poster'].'"'.'hight="400px" width="400px">'.'</td>';
                        
						$id = $row['id'];								
                //delete menu
                        echo '<td>';
			            echo '<form action="processpromo.php" method="POST" >';
			            echo "<input type='hidden' value='$id' name='idToDelete'>";
			            echo '<input type="submit" name="deleteButton" value="Delete">';
			            echo '</form>';
                        echo '</td>';	
						
				//updaate menu
				        echo '<td>';
			            echo '<form action="updatePromoForm.php" method="post" >';
			            echo "<input type='hidden' value='$id' name='idToUpdate'>";
			            echo '<input type="submit" name="updateMovieButton" value="Update">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                    }
	  
        echo '</table>';
		?>					
        <a style="color:white;" href="HomePageAdmin.php">Back to Homepage</a>
    </body>
</html>