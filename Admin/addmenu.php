<!DOCTYPE html>
<html>
<head>
    <title>Add Food to Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Add Food to Menu</h1>
    <form method="post" action="processmenu.php" enctype="multipart/form-data">
        <label for="name">Food Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>
        <br>
		
		<label for="poster">Menu Poster:</label>
        <input type="file" id="poster" name="poster"><br>
		<br>
		
        <input type="submit" name="addButton" value="Add Food">
    </form>
</body>
</html>
