<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

 $conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT latitude, longitude FROM map";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
	
  while ($row = mysqli_fetch_assoc($result)) {
	
		$latitude = $row["latitude"];
		$longitude = $row["longitude"];
		
		
	}
	}

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
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">
 
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
	  <a href="Login.php">ADMIN SIGN IN</a>
    </div>
  <br>
  <br>
  <br>
<iframe width = "100%" height = "500" src = "https://maps.google.com/maps?q=<?php echo
			$latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

<br>
<br>
<form action="contact_intermediate.php" method="post">
  <div class="elem-group">
    <label for="name">Name</label>
     <input type="text" id="name" name="name" placeholder="Johnny Appleseed" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  
  <div class="elem-group">
    <label for="email">E-Mail address</label>
    <input type="email" id="email" name="email" placeholder="johnnyappleseed@gmail.com" required>
  </div>

  <div class="elem-group">
    <label for="message">Purpose of Contacting Us:</label>
    <textarea id="message" name="message" placeholder="Reason..." required></textarea>
  </div>
  <button type="submit">Submit</button>
</form>



</body>
</html>

