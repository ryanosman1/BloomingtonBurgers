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
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">
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
	  <a href="Login.php">ADMIN SIGN IN</a>
    </div>
    
    <br>
	<br>
	<br>
	<!--MESSAGE FROM DATABASE-->
<?php 
// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
   
$sql = "SELECT event_title, event_date, event_description, id FROM events";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["event_title"]. $row["event_description"]. $row["event_date"]. "<br>";
		
			echo "<form action = 'reservation.php' method = 'post'>" ;
			echo "<input hidden type = \"id\" name=\"id\" value = \"".$row["id"]. "\"><br>";
			echo "<button type = \"submit\" name=\"submit\"> RSVP </button>";
			echo "</form>";
		}
	} else {
	}
	mysqli_close($conn);   
	

	

?>



</body>
</html>

