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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- resets browser defaults -->
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
<!--CONTACT FORM -->
<form action="AboutUsIntermediate.php" method="post">
  <div class="elem-group">
    <label for="name">Admin Name</label>
    <input type="text" id="name" name="name" placeholder="Johnny Appleseed" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="johnnyappleseed@gmail.com" required>
  </div>

  <div class="elem-group">
    <label for="message">Updated About Us Message</label>
    <textarea id="message" name="message" placeholder="Admin About Us Message..." required></textarea>
  </div>
  <button type="submit">Send</button>
</form>



<br>
<br>
<br>
<a href = "https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AUpload.php"> Admin Picture Upload </a>

<br>
	<!--MESSAGE FROM DATABASE-->
<?php 

if (!$conn) {
	die("Connection error: " . mysqli_connect_error());
}
echo "Hello. ";    
$sql = "SELECT admin_description FROM about_us";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["admin_description"]. "<br>";
		}
	} else {
		echo "Cannot Update";
	}
	mysqli_close($conn); 
?>

</body>
</html>

