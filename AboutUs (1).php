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
    <title>Bloomington Pizza</title>
</head>

<body>

    <!--NAV BAR 1-->
    <div class="topnav">
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>Bloom Burgers</bold></a>
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
    
    
	<!--MESSAGE FROM DATABASE-->
<?php 
// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Hello. ";
$sql = "SELECT description2, file FROM aboutUs";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["description2"]. "<br>";
		$picture = $row["file"];
		}
	} else {
		echo "This is NOT Bloomington Pizza"; 
	}
	mysqli_close($conn);  
	

?>
<img src = <?php echo $picture ?> >

</body>
</html>

