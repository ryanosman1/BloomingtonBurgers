<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

$conn = mysqli_connect($servername, $username, $password, $database);



if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Your request has been sent. "; 

$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contactUs (email, cust_issue, cust_check) VALUES ('" . $email . "', '" . $message . "', 0)";


if (mysqli_query($conn, $sql)) { 
	echo "We will get back to you soon!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

