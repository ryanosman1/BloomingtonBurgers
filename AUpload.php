<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

// create connection
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

    <!--NAV BAR 1-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">
      </div>
    </div>

  <br><br>

  <!--NAV BAR 2-->
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
  
  <!--UPLOAD PICTURE -->  
<form action="picture_upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>
 





</body>
</html>

