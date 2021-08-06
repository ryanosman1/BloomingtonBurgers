<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

if (isset($_GET['username'])) {
$welcome="Welcome".$_GET['username'];
}
else {
$welcome="<a href='Login.php'>Sign In</a>";
}
?>
<!DOCTYPE html>  
<html lang="en-us">

<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Bloom Burgers</title>
	
</head>

<body>

    
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AdminHomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">

        <h3> <a href="Login.php">Admin Sign In</a></h3>
        <h3> <?= $welcome; ?> </h3> 
      </div>
    </div>

  <br><br>

  
  <div class="nav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php">HOME</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Menu.php">MENU</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/News.php">NEWS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Events.php">EVENTS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AboutUs.php">ABOUT US</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/ContactUs.php">CONTACT US</a>
    </div>
    
    
	
	
<form action="AdminContactIntermediate.php" method="post">

  <div class="elem-group">
    <label for="latitude">Latitude</label>
    <textarea id="latitude" name="latitude" placeholder="latitude..." required></textarea>
  </div>
    <div class="elem-group">
    <label for="longitude">Longitude</label>
    <textarea id="longitude" name="longitude" placeholder="longitude..." required></textarea>
  </div>
  <button type="submit">Update Location</button>

</form>

<form action="https://cgi.luddy.indiana.edu/~ryosman/capstone-makeup/AdminResponse.php">
    <input type="submit" value="Respond to Customers" />
</form>




</body>
</html>

