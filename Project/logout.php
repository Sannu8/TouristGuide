<?php 
  
session_start(); //Starting the current session
session_destroy(); // Destroying the session in order to log out now
header("location: login.html?msg=Successfully logged out."); 
  
?>