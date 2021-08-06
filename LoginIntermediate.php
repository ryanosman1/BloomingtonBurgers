<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("Connection error: " . mysqli_connect_error()); 
}
echo "Request has been sent "; 

$username = $_GET['username'];
$email = $_GET['email'];

echo $email;


$sql = "SELECT email FROM admin_check WHERE email= '$email' AND admin = 1";

echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
header('Location: https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php');
}

else {
header('Location: https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/HomePage.php');
	}

 
?>
