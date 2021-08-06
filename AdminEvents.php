<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_rwaseem";
$password = "my+sql=i494f20_rwaseem";
$database = "i494f20_rwaseem";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database); 

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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- resets browser defaults -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Bloomington Pizza</title>
</head>

<body>

    <!--NAV BAR 1-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminHomePage.php"><strong>BLOOMINGTON PIZZA</strong></a> 
      <div class="topnav-right">

        <h3> <a href="Login.php">Admin Log In</a></h3>
        <h3> <?= $welcome; ?> </h3>
      </div>
    </div>

  <br><br><br><br>

  <!--NAV BAR 2-->
  <div class="nav">
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminHomePage.php">HOME</a>
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/Menu.php">MENU</a>
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/News.php">NEWS</a>
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminEvents.php">EVENTS</a>
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminAboutUs.php">ABOUT US</a>
      <a href="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminContactUs.php">CONTACT US</a>
    </div>
    
<!--CONTACT FORM -->
<form action="EventsIntermediate.php" method="post">
  <div class="elem-group">
    <label for="title">Event Title</label>
    <input type="text" id="title" name="title" placeholder="..." pattern=[A-Z\sa-z]{3,50} required>
  </div>
  <div class="elem-group">
    <label for="date">Event Date</label>
    <input type="date" id="date" name="date" placeholder="YYYY-MM-DD" required>
  </div>
  <div class="elem-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Event Description" required></textarea>
  </div>
  <div class="elem-group">
    <label for="max_capacity">Max Capacity</label>
    <textarea id="max_capacity" name="max_capacity" placeholder="Max Capacity" required></textarea>
  </div>
  <button type="submit">Create New Event</button>
</form>
<br>
<br>
<br>
    
<form action="https://cgi.luddy.indiana.edu/~rwaseem/capstone-makeup/AdminEditEvent.php">
    <input type="submit" value="Edit Events" />
</form>
	<!--MESSAGE FROM DATABASE-->
<?php 
// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
   
$sql = "SELECT title, description, event_date FROM events";
$result = $conn->query($sql); 



?>

</body>
</html>

