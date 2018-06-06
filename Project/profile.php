<?php
session_start();

if(isset($_POST['edit'])){
	      header("location:edit.html"); 
		  }
		 
		  else if(isset($_POST['delete'])){
	      header("location:homepage.html"); 
		  }

		 