<!DOCTYPE html>
<html>
 <head>
        <title>Setting</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="uploadimage.css"/>
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    </head>
	<body>
            <div class="rightbox">
                <form action="processuploadimagecustomer.php" method="post" enctype="multipart/form-data">
                    <h1>Select Your Profile</h1>
                    <p><img id="output"/></p>
                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="loadFile(event)">
                    <button><input type="submit" name="submit" class="btn" value="Upload Image"></button>
                </form>
			</div>		
			    <script>
                 // JavaScript function to display the selected image
                function loadFile(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
               }
               </script>
	</body>

</html>