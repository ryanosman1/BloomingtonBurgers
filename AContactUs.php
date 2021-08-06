<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

$conn = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE html>  
<html lang="en-us">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="officialstyles.css">
    <title>Bloom Burgers</title>
	
</head>

<body>

    
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">
 
      </div>
    </div>

  <br><br>

  
  <div class="nav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php">HOME</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Menu.php">MENU</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/News.php">NEWS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AEvents.php">EVENTS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AAboutUs.php">ABOUT US</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AContactUs.php">CONTACT US</a>
	  <a href="Login.php">ADMIN SIGN IN</a>
    </div>
    
    <br>
	<br>
	<br>
	
	
<form action="AContactIntermediate.php" method="post">

  <div class="elem-group">
    <label for="latitude">Latitude</label>
    <textarea id="latitude" name="latitude" placeholder="enter latitude here.." required></textarea>
  </div>
    <div class="elem-group">
    <label for="longitude">Longitude</label>
    <textarea id="longitude" name="longitude" placeholder="enter longitude here..." required></textarea>
  </div>
  <button type="submit">Update Google Maps</button>

</form>

<br>
<br>

<a href = "https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AResponse.php"> Respond to Customers </a>


</body>
</html>

