<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Your request has been sent. "; 

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$sql = "INSERT INTO google_map (latitude, longitude) VALUES ('" . $latitude . "', '" . $longitude . "')";

if (mysqli_query($conn, $sql)) {
	echo "We will update the location!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

