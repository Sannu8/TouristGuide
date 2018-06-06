<?php 
  
$connect = mysqli_connect('localhost','root', 'root');

if (!$connect){
	  die("Error while connecting to the database".mysqli_error($connect)); 
   }
   
$db_select = mysqli_select_db($connect, 'GetSetGo');

if (!$db_select){
    die("Failed to select Database" . mysqli_error($connect));
}
?>