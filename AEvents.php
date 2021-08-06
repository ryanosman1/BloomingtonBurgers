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
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstone-makeup/AHomePage.php"><bold>Bloom Burgers</bold></a> 
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
<form action="EventsIntermediate.php" method="post">
  <div class="elem-group">
    <label for="event_title">Event Title</label>
    <input type="text" id="title" name="event_title" placeholder="Event Title" pattern=[A-Z\sa-z]{3,50} required>
  </div>
  <div class="elem-group">
    <label for="event_date">Event Date</label>
    <input type="date" id="date" name="event_date" placeholder="Date" required>
  </div>

  <div class="elem-group">
    <label for="event_description">Description</label>
    <textarea id="description" name="event_description" placeholder="Event Description" required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>
    
	
<?php 
// check connection
if (!$conn) {
	die("Connection error " . mysqli_connect_error());
}
echo "Hello ";    
$sql = "SELECT event_title, event_date, event_description FROM events"; 
$result = $conn->query($sql); 



?>

</body>
</html>

