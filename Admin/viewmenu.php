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
        <h1>Menu List</h1>
        <?php
		include "Menu.php";
		echo '<div class="ContactUsList">';
		displaySearchOption();
	
       if (isset($_POST['searchByname'])) {
    $qry = findByName();
    } elseif (isset($_POST['searchBytype'])) {
    $qry = findByType();
    } else {
    $qry = getListOfMenu();
    }
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
				<tr> 
                    <td>No</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Type</td>
                    <td>Avatar</td>
					<td>Delete</td>
					<td>Update</td>
                </tr>';
				
				$i=1;
                while($row=mysqli_fetch_assoc($qry))
                    {

                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['price'].'</td>';
                        echo '<td>'.$row['type'].'</td>';
						echo '<td><img src="'.$row['avatar'].'"'.'hight="400px" width="400px">'.'</td>';
                        
						$name = $row['name'];								
                //delete menu
                        echo '<td>';
			            echo '<form action="processmenu.php" method="POST" >';
			            echo "<input type='hidden' value='$name' name='nameToDelete'>";
			            echo '<input type="submit" name="deleteButton" value="Delete">';
			            echo '</form>';
                        echo '</td>';	
						
				//updaate menu
				        echo '<td>';
			            echo '<form action="updateMenuForm.php" method="post" >';
			            echo "<input type='hidden' value='$name' name='nameToUpdate'>";
			            echo '<input type="submit" name="updateMenuButton" value="Update">';
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