<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";


$conn = mysqli_connect($servername, $username, $password, $database); 



if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Update has been sent. "; 

$email = $_POST['email'];
$message = $_POST['message'];

$sql = "UPDATE about_us SET email='$email', admin_description='$message'"; 

if (mysqli_query($conn, $sql)) {
	echo "We will fix this shortly! ";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

