<!DOCTYPE html>
<html>
<head>
    <title>Movie Details and Seat Selection</title>
    <style>
        .movie-container {
            display: flex;
        }

        .movie-card {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            gap: 20px;
            max-width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .movie-image {
            max-width: 100%;
            max-height: 100%;
        }

        .movie-info {
            text-align: center;
        }

        .seat-selection {
            position: absolute;
            bottom: 20px;
            right: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px; 
        }

        .select-button {
            margin-top: 10px;
        }


        .movie-details {
            position: relative;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="movie-details">
        <?php
        include "../Admin/movie.php";


        $title = $_POST['titleToView'];
        $qry = getMovieInformation($title);

        while ($row = mysqli_fetch_assoc($qry)) {
			$movieTitle = $row['title'];
            echo '<div class="movie-card">';
            echo '<img src="' . $row['poster'] . '" class="movie-image">';
            echo '<div class="movie-info">';
            echo "<p><strong>Title:</strong> " . $row['title'] . "</p>";
            echo "<p><strong>Director:</strong> " . $row['director'] . "</p>";
            echo "<p><strong>Release Date:</strong> " . $row['releasedate'] . "</p>";
            echo "<p><strong>Time:</strong> " . $row['time'] . "</p>";
            echo "<p><strong>Genre:</strong> " . $row['genre'] . "</p>";
            echo '</div>';
            echo '</div>';
        }
        ?>
		
        <form action="processbooking.php" method="post" class="seat-selection">
            <label for="selected_seats">Movie</label>
            <?php echo "<input type='text' name='title' value='" . $movieTitle . "' required>"; ?>
			<br>
			<br>
            <label for="selected_seats">Select Seats:</label>
            <select name="seat" id="seat" multiple>
                <?php
                $con = mysqli_connect("localhost", "g01s41", "12345", "g01s41db");

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "SELECT seatnumber FROM seat WHERE isavailable = 1";
                $qry = mysqli_query($con, $sql);

                if ($qry) {
                    while ($row = mysqli_fetch_assoc($qry)) {
                        echo "<option value='" . $row['seatnumber'] . "'>" . $row['seatnumber'] . "</option>";
                    }
                } else {
                    echo "Query failed: " . mysqli_error($con);
                }

                mysqli_close($con);
                ?>
            </select>
            <br>
			<br>
            <input type="submit" value="Book" class="select-button" name="book">
        </form>
    </div>
</body>
</html>


