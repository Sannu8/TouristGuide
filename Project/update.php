<?php
session_start();

// Establish Connection with Server by passing ServerName, UserId and Password as Parameter
$database = mysqli_connect('localhost', 'root', 'root', 'GetSetGo' );

if(isset($_POST['usernameupdate'])){
	$OldUserName=($_POST['oldusername']);
	    $NewUserName=($_POST['newusername']);
	    $Password=($_POST['updateuserpassword']);
		//$PhoneNumber=($_POST['phone']);
		//$UserName=($_POST['username']);
	  //  $Password=($_POST['password']);
	//    $Confirm=($_POST['confirm']);
	       
	     //Write UserInfo in database 
           $Password = md5($Password);
         //For security purposes, encrypt password before storing it into database.
           
            $sqlusercredentials = "UPDATE UserCredentials SET Username = '$NewUserName' WHERE Password = '$Password'";

           
            mysqli_query($database,$sqlusercredentials); 
            
            $_SESSION['message']="Your username has been updated sucessfully."; 
            $_SESSION['username']=$username;
            
            header("location:profile.php");  //For redirecting to home page
    }
    else
    {
      $_SESSION['message']= "Error";   
     }
	
mysql_close($connect); // Closing Connection

}
?>