<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Movie List</title>
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
        <h1>Movie List</h1>
        <?php
		include "movie.php";
		echo '<div class="ContactUsList">';
		displaySearchOption();
	
        if(isSet($_POST['searchByname']))
	    $qry = findByName();
        else
	    $qry = getListOfMovie();//display all car
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
				<tr> 
                    <td>No</td>
                    <td>Title</td>
                    <td>Director</td>
                    <td>Releasedatee</td>
                    <td>Time</td>
					<td>Genre</td>
					<td>Poster</td>
					<td>Delete</td>
					<td>Update</td>
                </tr>';
				
				$i=1;
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row['title'].'</td>';
                        echo '<td>'.$row['director'].'</td>';
                        echo '<td>'.$row['releasedate'].'</td>';
						echo '<td>'.$row['time'].'</td>';
						echo '<td>'.$row['genre'].'</td>';
						echo '<td><img src="'.$row['poster'].'"'.'hight="400px" width="400px">'.'</td>';
                        
						$title = $row['title'];								
                //delete menu
                        echo '<td>';
			            echo '<form action="processmovie.php" method="POST" >';
			            echo "<input type='hidden' value='$title' name='titleToDelete'>";
			            echo '<input type="submit" name="deleteButton" value="Delete">';
			            echo '</form>';
                        echo '</td>';	
						
				//updaate menu
				        echo '<td>';
			            echo '<form action="updateMovieForm.php" method="post" >';
			            echo "<input type='hidden' value='$title' name='titleToUpdate'>";
			            echo '<input type="submit" name="updateMovieButton" value="Update">';
			            echo '</form>';
                        echo '</td>';
						
					    echo '</tr>';  
                        $i++;
                    }
	  
        echo '</table>';
		?>					
        <a style="color:white;" href="HomePageAdmin.php">Back to Homepage</a>
    </body>
</html>