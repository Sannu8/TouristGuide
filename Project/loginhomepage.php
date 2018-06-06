

<html>
	<head>
		<title> Home Page </title>
		<meta charset = "UTF-8">
		<link rel = "stylesheet" href = "stylesheet.css" type = "text/css">
		<style>
			h3
				{
				font-size: 20px;
				color: brown;
				}
			table
				{
				width: 100%
				}
		</style>
		<script>
			function Search() {
				var data = document.getElementById('searchdata').value
				
				
				if (data == 0) {
					Nullalert.style.color = "Red";
					Nullalert.innerHTML = "Please enter a search query!";	
				
					
			}
			else {
					
				location.replace("search.php");
					
			}
			}
				
		</script>
				
		
	</head>
	<body>	
		<span id = "Nullalert"></span>
		<header>
		<img src = "http://i.imgur.com/VavnyfA.png" width="100" height="100" alt = "logo">
		
		<h1> Welcome to GET SET GO, <?php
session_start();
echo $_SESSION["username"];

?>! </h1>	
		<h2> An Ultimate Travel Guide for budget travellers </h2>
		</header>
		
			<br><br><br>
		
			<ul class="top-level-menu">
		    <li><a href="homepage.html">HOME</a></li>
		    <li><a href="aboutus.html">ABOUT</a></li>
		    <li>
		        <a href="#">TRAVEL DESTINATIONS</a>
		        <ul class="second-level-menu">
		            <li><a href="#">Helsinki, Finland</a></li>
		            <li><a href="#">Oslo, Norway</a></li>
		            <li>
		                <a href="#">Barcelona, Spain</a>
		                <ul class="third-level-menu">
		                    <li><a href="Accomodation.php">Accomodation</a></li>
		                    <li><a href="#
							transport.html">Transportation</a></li>
		                    <li><a href="thingstodo.php">Things To Do</a></li>
		                    <li><a href="#">Landmarks</a></li>
		                </ul>
		            </li>
		            <li><a href="#">Seattle</a></li>
		        </ul>
	   
		    </li>
		    <li><a href="contact.html">CONTACT US</a></li>
			<li><input type = "search" id = "searchdata"><button onclick = "Search()">Search</button></li>
		</ul>
			<ul class = "top-level-menu">
			<li style="background:none;padding: 0 0 10px 20px;"><a href="#">
					
						<img src = "profile.png" width = 50px; >
						</a>
					
						<ul class = "second-level-menu" style=" top: 20px;left: 80;">
				            <li ><a href="Profile.html">Profile</a></li>
				            <li ><a href="">Messages</a></li>
				            <li >
				                <a href="logout.php" onclick= "return confirm('Are you sure you want to logout?')">Logout</a></li>
							</ul>
			</ul>
		
		
		
		<img src = "http://i.imgur.com/lftL3gx.jpg" width= "1100" height = "300" alt = "travel">
		<footer>
			 
			<table>
			
				<tr>
					<th>Contact information</th>
					
					<th>Copyright 2017 Get Set Go</th>
					<th>All Rights Reserved </th>
					
					
					<th><a class = "navigation" href = "Terms.html">Terms & Conditions </a> 
					</th>
					
					<th><a class = "navigation" href = "policy.html">Accessibility Policy</a> </th>
					
					<th><a href = "">Language</a></th>
				</tr>
				
			</table>			

		</footer>

	</body>
</html>