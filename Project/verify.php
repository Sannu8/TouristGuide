<?php
	$user = $_POST['username'];
	$userPass =  $_POST['userPass'];
	
	if($username == 'kalyan' && $password == 'giri'){
		echo 'Permission has been granted, Giri<br>';
		echo 'Enjoy the site.';
	} else {
		
		echo 'You were denied access to this server';
	}

?>