<?php
session_start();

// Establish Connection with Server by passing ServerName, UserId and Password as Parameter
$database = mysqli_connect('localhost', 'root', 'root', 'GetSetGo' );

if(isset($_POST['register'])){
	$FullName=($_POST['fullname']);
	    $Nationality=($_POST['nationality']);
	    $EmailAddress=($_POST['email']);
		$PhoneNumber=($_POST['phone']);
		$UserName=($_POST['username']);
	    $Password=($_POST['password']);
	    $Confirm=($_POST['confirm']);
		$Level = $_POST['level'];
	   $Admin = "admin";
	    $User = "user";
	   
	    if($Password == $Confirm)
	    	{         
	     //Write UserInfo in database 
          //$Password= md5($Password);
		  //$AdminUserName = 'smahat';
			   //$AdminUserName1 = 'ebaidya';
         //For security purposes, encrypt password before storing it into database.
		 if ($Level == "admin") { 
			 
            $sqluserinfo = "INSERT INTO UserInfo (FullName, Nationality, EmailAddress, PhoneNumber, Level, Username, Password) VALUES ('$FullName','$Nationality','$EmailAddress','$PhoneNumber','$Admin','$UserName','$Password')";
	    }
	    else
	    {
	        $sqluserinfo = "INSERT INTO UserInfo (FullName, Nationality, EmailAddress, PhoneNumber, Level, Username, Password) VALUES ('$FullName','$Nationality','$EmailAddress','$PhoneNumber','$User','$UserName','$Password')";
	     }
		
           //$sqlusercredentials = "INSERT INTO UserCredentials ( Username, Password)  VALUES ('$UserName','$Password')";
		   			
            mysqli_query($database,$sqluserinfo);  
           // mysqli_query($database,$sqlusercredentials); 
            
    
			$_SESSION["username"] = $username;
		    header("Location: loginhomepage.php");
    }
    else
    {
	  
	  echo '<i style = "color:red;"> Passwords do not match. Please re-enter!!! </i>';
	  include ('register.html');
     }
	
mysql_close($connect); // Closing Connection

}
?>