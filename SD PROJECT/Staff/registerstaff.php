    <?php
      if (isset($_POST['registerstaffbutton'])) { 
		$con=mysqli_connect("localhost","g01s41","12345","g01s41db");   
        
		if (!$con) {
          echo mysqli_connect_error();
       }
	   $username=$_POST['username'];
       $email=$_POST['email'];
	   $password=$_POST['password'];
	   $repassword=$_POST['repassword'];

	   
        if($password == $repassword){
            $sql = "INSERT INTO staff(username,email,password) VALUES ('$username', '$email', '$password')";
            mysqli_query($con,$sql);
            header('Location:../Login/loginstaff.html');
        }else{
          echo '<script>alert("Password and Repeatpassword are not same")</script>';
		  header("refresh:1;url=registeradmin.html");
        }
	  }
      
    ?>