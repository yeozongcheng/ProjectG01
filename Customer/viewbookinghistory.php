<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <head>
        <title>Cart List</title>
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
        <h1>History</h1>
        <?php
		include "cart.php";
		echo '<div class="ContactUsList">';
        
	    $qry = getListOfHistory();
                echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-animate-left w3-hoverable w3-card-4 width:100%;"> 
                <tr> 
                    <td>No</td>
                    <td>Username</td>
                    <td>Itemname</td>
                    <td>Price</td>
                </tr>';
				
                while($row=mysqli_fetch_assoc($qry))
                    {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['username'].'</td>';
                        echo '<td>'.$row['itemname'].'</td>';
                        echo '<td>'.$row['price'].'</td>';
					    echo '</tr>';  
                    }
        echo '</table>';
		echo '<a href="HomePageCustomer.php">Home</a>';
		?>
    </body>
</html>