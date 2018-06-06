<?php
//Starting the Session
session_start();
require('connect.php');
//IF the form is submitted

if(isset($_POST['login'])){

	$username = $_POST['username']; //Set UserName
	$password = $_POST['password']; //Set Password
	//$password = md5($password);
	
	//Checking existing values in the database
	  $sql= "SELECT * FROM UserInfo WHERE Username='$username' and password='$password'";
	$result= mysqli_query($connect, $sql) or die(mysqli_error($connect));
    $count= mysqli_num_rows($result);
	
	//IF posted values = database values, session will be created for the user
	 if($count==1){
	$_SESSION["username"] = $username;
    header("Location: loginhomepage.php");
    }
     
	 else {
		
		  //If login credentials dont match, an error message will be shown.
		  echo '<i style = "color:red;"> Invalid Login Credentials. Please retry!!!! </i>';
		 
		  include('login.html');
		  
     }
      
 }
  //If the user is logged in, greet the user
 // if (isset($_SESSION['username'])){
	  
//  $username = $_SESSION['username'];
// 
//echo "This is the Members Area";
//  echo "<a href='logout.php'>Logout</a>";
//}

//3.2 When the user visits the page first time, simple login form will be displayed.
?>

