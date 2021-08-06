<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_ryosman";
$password = "my+sql=i494f20_ryosman";
$database = "i494f20_ryosman";


if (!$conn) {
	die("Connection error " . mysqli_connect_error());
}
echo "Request has been sent "; 

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$sql = "UPDATE google_map SET latitude='$latitude', longitude='$longitude'"; 

if (mysqli_query($conn, $sql)) {
	echo "We will update the location!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 
?>

