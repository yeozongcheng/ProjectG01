   <?php
      if (isset($_POST['registercustomerbutton'])) {	  
		session_start();
	    $con=mysqli_connect("localhost","g01s41","12345","g01s41db");   
        
		if (!$con) {
          echo mysqli_connect_error();
       }
	   $verifyemail=$_SESSION['email'];
	   $username=$_POST['username'];
       $email=$_POST['email'];
	   $password=$_POST['password'];
	   $repassword=$_POST['repassword'];
	   $avatar="";
   
        if(($password == $repassword) && ($verifyemail==$email)){
            $sql = "INSERT INTO customer(username,email,password,avatar) VALUES ('$username', '$email', '$password','$avatar')";
            mysqli_query($con,$sql);
            header('Location:../Login/login.html');
        }else{
          echo '<script>alert("Password and Repeatpassword are not same Or Verify Email and Email Are Not Same")</script>';
		  header("refresh:1;url=../Guest/register.html");
        }
		
	  }
      
    ?>