
    <?php
      if (isset($_POST['registeradminbutton'])) {	  
		$con=mysqli_connect("localhost","g01s41","12345","g01s41db");   
        
		if (!$con) {
          echo mysqli_connect_error();
       }
	   $username=$_POST['username'];
       $email=$_POST['email'];
	   $password=$_POST['password'];
	   $repassword=$_POST['repassword'];
	   $avatar="";
   
        if($password == $repassword){
            $sql = "INSERT INTO admin(username,email,password,avatar) VALUES ('$username', '$email', '$password','$avatar')";
            mysqli_query($con,$sql);
            header('Location:../Login/loginadmin.html');
        }else{
          echo '<script>alert("Password and Repeatpassword are not same")</script>';
		  header("refresh:1;url=registeradmin.html");
        }
		
	  }
      
    ?>