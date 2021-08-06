<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

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
    <title>Bloom Burgers</title>
</head>

<body>

    <!--NAV BAR 1-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AdminHomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">

        <h3> <a href="Login.php">Admin Sign In</a></h3>
        <h3> <?= $welcome; ?> </h3> 
      </div>
    </div>

  <br><br>

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
<form action="EditIntermediate.php" method="post"> 
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
    <div class="elem-group">
    <label for="id">ID</label>
    <textarea id="id" name="id" placeholder="Event ID" required></textarea>
  </div>
  <button type="submit">Update Event</button>
</form>
 





</body>
</html>

