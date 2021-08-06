<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

// create connectio
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Your request has been sent. "; 

$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contact_us (email, customermessage) VALUES ('" . $email . "', '" . $message . "')";


if (mysqli_query($conn, $sql)) { 
	echo "We will get back to you soon!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

