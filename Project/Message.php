<?php
session_start();

// Establish Connection with Server by passing ServerName, UserId and Password as Parameter
$database = mysqli_connect('localhost', 'root', 'root', 'GetSetGo' );

if(isset($_POST['submit'])){
		$FirstName=($_POST['firstname']);
	    $LastName=($_POST['lastname']);
	    $Email=($_POST['email']);
		$Confirm=($_POST['confirm']);
	    $Message=($_POST['message']);
		
	    if($Email == $Confirm)
	    	{         
	     //Write UserInfo in database 
          $sqlmessage = "INSERT INTO Message (FirstName, LastName, Email, Message) VALUES ('$FirstName','$LastName','$Email','$Message')";

            mysqli_query($database,$sqlmessage);  
         
		  $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            
            header("location:loginhomepage.html");  //For redirecting to home page
    }
    else
    {
      $_SESSION['message']= "Emails do not match. Please re-enter them.";   
     }
	
mysql_close($connect); // Closing Connection

}
?>