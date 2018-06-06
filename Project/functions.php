<?php 
  
include('includes/connect.php'); 
  
function getPost() 
{ 
 $query = mysql_query("select * from userinfo") or die(mysql_error("can not execute the query")); 
  
 while($post = mysql_fetch_assoc($query)) 
 { 
 	echo "<h2>". $post['Subject'] . " by ". $post['Sender'] . "</h2>"; 
 	echo $post['Content']; 
 } 
} 
  
?>