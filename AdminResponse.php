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
<form action="AdminResponseIntermediate.php" method="post">
Customer ID: <input type = "text" name="id"><br>
Admin First Name: <input type="text" name="first_name"><br>
Admin Last Name: <input type="text" name="last_name"><br>
Customer Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit"> 
</form>
 





</body>
</html>

