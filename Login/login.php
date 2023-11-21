<?php

function validatepassworduser($username,$password)
{
	$con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	if(!$con)
	{
		echo mysqli_connect_error();
	}else
	{
        $sql="select * from customer where username='$username'and password='$password'";  
        $result=mysqli_query($con,$sql);	
        $count=mysqli_num_rows($result); 		
        if($count==1){			
         return true;    
        }  
        else{  
         return false;
        }     
	}
}

function validatepasswordadmin($username,$password)
{
	$con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	if(!$con)
	{
		echo mysqli_connect_error();
	}else
	{
        $sql="select * from admin where username='$username' and password='$password'";  
        $result=mysqli_query($con,$sql);	
        $count=mysqli_num_rows($result); 		
        if($count==1){			
         return true;    
        }  
        else{  
         return false;
        }    
	}
	
}

function validatepasswordstaff($username,$password)
{
	$con=mysqli_connect("localhost","g01s41","12345","g01s41db"); 
	if(!$con)
	{
		echo mysqli_connect_error();
	}else
	{
        $sql="select * from staff where username='$username' and password='$password'";  
        $result=mysqli_query($con,$sql);	
        $count=mysqli_num_rows($result); 		
        if($count==1){			
         return true;    
        }  
        else{  
         return false;
        }    
	}
	
}

?>