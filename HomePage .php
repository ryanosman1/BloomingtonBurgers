<?php

$conn = mysqli_connect($servername, $username, $password, $database); 


if (isset($_GET['username'])) {
$welcome="Welcome".$_GET['username'];
}
else {
$welcome="<a href='Login.php'>Log In</a>"; 
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Bloom Burgers</title>
</head>
<body>

    <!--Secondary navigation bar-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php""><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">
        
        <h3> <a href="Login.php">Admin Sign In</a></h3>
      </div>
    </div>

    <br><br>

    <!-- Main navigation bar-->
    <div class="nav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php">HOME</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Menu.php">MENU</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/News.php">NEWS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Events.php">EVENTS</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AboutUs.php">ABOUT US</a>
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/ContactUs.php">CONTACT US</a>
      
      
      
      </div>
	<!--Intro Text -->
	<div class = "body">
	<h1> Welcome to Bloom Burgers </h1>
	<p> We hope you come and try our delicious burgers. We provide a fresh new take on the classic American burger and bring a great experience to the people of Bloomington, Indiana. </p>
	<p> Bloom Burgers is located on 403 N Walnut Street </p>
	<p> Come by and give our burgers a chance. We ensure that you won't regret it </p>

    <!-- Picture -->
    <center><img src="BurgerLogo.jpg" style="width:35%" alt="burger"></center>

   

</body>
</html>
