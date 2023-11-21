<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .pay-button {
            background-color: #008CBA;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        body {
            background: pink; /* Set the website background to pink */
        }

        .card-container {
            background: #fff; /* Set the card background to white */
            padding: 20px;
            border-radius: 10px; /* Add rounded corners to the card */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to the card */
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card card-container">
            <div class="card-body">
                <h1 class="card-title">Receipt</h1>
				 <?php
                session_start();
				$con=mysqli_connect("localhost","g01s41","12345","g01s41db");
				$username = $_SESSION["username"];
				$status="no";
				 $sql = "SELECT * FROM `order` WHERE username = '$username' && status='$status'";
                 $result = $con->query($sql);
				   if ($result->num_rows > 0) {
                        echo "<table class='table'>";
                        echo "<thead><tr><th>Item Name</th><th>Item Price</th></tr></thead>";
                        $totalPrice = 0;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["itemname"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "</tr>";
                            $totalPrice += $row["price"];
                        }
				   
                        echo "</table>";
						 $formattedTotalPrice = number_format($totalPrice, 2);
                        echo "<p>Total Price: $formattedTotalPrice</p>";
						echo '<form action="processbooking.php" method="POST" >';
			            echo "<button class='btn btn-primary pay-button' name='paybutton'>Pay</button></a>";
				   } else {
                        echo "<p>Your cart is empty.</p>";
                    }
				?>
				 <br>
                <br>
                <a href="viewcart.php" class="btn btn-secondary">Back to Cart</a>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>