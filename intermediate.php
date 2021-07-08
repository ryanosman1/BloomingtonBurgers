<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; 

$customer_email = $_POST['customer_email'];

$customer_message = $_POST['customer_message'];

$sql = "INSERT INTO Contact_Us (email, customer_message) VALUES ('" . $customer_email . "', '" . $customer_message . "')";

if (mysqli_query($conn, $sql)) {
	echo "Thank you!";
} else {
	echo "Input Error. Try again: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

