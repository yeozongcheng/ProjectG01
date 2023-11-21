<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
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
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .select-button {
            margin-top: 10px; /* 距离上方的间距 */
        }
    </style>
</head>
<body>
<?php
include "../Admin/movie.php";
$title = $_POST['titletoview'];
$qry = getMovieInformation($title);

while ($row = mysqli_fetch_assoc($qry)) {
    echo '<div class="movie-container">';
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
    echo '</div>';
}

// 以下是 "SELECT MENU" 输入按钮的示例
/*
echo '<div class="seat-selection">';
echo '<form action="processmoviestaff.php" method="POST">';
echo '<input type="submit" value="SELECT MENU" name="menubutton" class="select-button">';
echo '<input type="submit" value="SELECT SEAT" name="seatbutton" class="select-button">';
echo '</form';
echo '</div>';
*/
?>
</body>
</html>