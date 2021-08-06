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
echo "Updated "; 

$title = $_POST['event_title'];
$date = $_POST['event_date'];
$description = $_POST['event_description'];
$sql = "INSERT INTO events (event_title, event_date, event_description) VALUES ('" . $title . "', '" . $date . "', '" . $description ."')";

if (mysqli_query($conn, $sql)) {
	echo "This has been updated";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);   
?>

