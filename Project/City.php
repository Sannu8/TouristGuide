<!DOCTYPE html>
<html>
<body>
<!DOCTYPE html>
<html>
<head>
	<title> Accomodation in Barcelona </title>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" href = "stylesheet.css" type = "text/css">	
	<script type = "text/javascript">
	
	function Back() {
	    window.history.back();
	}
	function Forward() {
	    window.history.forward();
	}
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
				
				
					.submit {
				
														background-color: dodgerblue;
														padding: 14px 40px;
														border-radius : 10px;
														color: white;
														}
				
				.btn {
				
										background-color: brown;
											padding: 8px 16px;
												border-radius : 50%;
											color: white;
											}
									</style>
</head>
<body>
	<span id = "Nullalert"></span>
	<table>
		<tr>
			<td align = left><button onclick = "Back()" class = "btn" > < </button></td>
				<td align = right><button onclick = "Forward()" class = "btn" >  > </button></td>
		</tr>
	</table>
	<header>
	<img src = "http://i.imgur.com/VavnyfA.png" width="100" height="100" alt = "logo">
	
	<h1>Things To Do In Barcelona</h1>
			
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
			<li><a href="login.html">Sign In</a></li>
		</ul>
		

		<br><br><br><br>
		<table>
			
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "GetSetGo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM city";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>SN</th><th>Cities</th><th>Country</th><th>Description</th></tr>";
	//output data for each row
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>". $row["cityid"]. "</td><td>". $row["cityname"]." </td><td>". $row["country"]." </td><td>" . $row["citydescription"]. "</td><td>";
		
		"Type: ". $row["Name"]. " " . $row["EmailAddress"] ."Hotel Name: ". $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>