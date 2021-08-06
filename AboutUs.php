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
      <a href="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php"><bold>Bloom Burgers</bold></a>
      <div class="topnav-right">


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
echo "Hello. ";
$sql = "SELECT admin_description, file_name FROM about_us";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["admin_description"]. "<br>";
		$picture = $row["file_name"];
		}
	} else {
		echo "Cannot Update"; 
	}
	mysqli_close($conn);  
	

?>
<img src = <?php echo $picture ?> >

</body>
</html>

