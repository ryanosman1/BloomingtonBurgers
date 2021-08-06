<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; 

$sql = "SELECT latitude, longitude FROM google_map";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
	echo "if";
  while ($row = mysqli_fetch_assoc($result)) {
	echo "while";
		$latitude = $row["latitude"];
		$longitude = $row["longitude"];
		
		?>
		
		<iframe width = "100%" height = "500" src = "https://maps.google.com/maps?q=<?php echo
			$latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
			
			<?php
	}
	}
if (isset($_GET['username'])) {
$welcome="Welcome".$_GET['username'];
}
else {
$welcome="<a href='Login.php'>Log In</a>";
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

    <!--NAV BAR 1-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>BLOOMINGTON PIZZA</bold></a>
      <div class="topnav-right">

        <h3> <a href="Login.php">Admin Sign In</a></h3>
        <h3> <?= $welcome; ?> </h3> 
      </div>
    </div>

  <br><br><br><br>

  <!--NAV BAR 2-->
  <div class="nav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php">HOME</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Menu.php">MENU</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/News.php">NEWS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Events.php">EVENTS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AboutUs.php">ABOUT US</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/ContactUs.php">CONTACT US</a>
    </div>
    
    
<!--CONTACT FORM -->
<form action="intermediate.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="john.doe@email.com" required>
  </div>

  <div class="elem-group">
    <label for="message">Reason for Contacting Us</label>
    <textarea id="message" name="message" placeholder="Reason..." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>




</body>
</html>

