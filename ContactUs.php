<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";


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
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">

        <h3> <a href="Login.php">Sign in</a></h3>
      
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
    <label for="message">Reason for contacting us</label>
    <textarea id="message" name="message" placeholder="Reason..." required></textarea>
  </div>
  
  <button type="submit">Submit</button>
  
</form>


</body>
</html>

