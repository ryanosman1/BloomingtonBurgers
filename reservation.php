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

$id = $_POST["id"];
//select statement

$sql = "SELECT curr_capacity, max_capacity FROM events WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows ($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	
	if($row['curr_capacity'] < $row['max_capacity']) {
	$count = $row['curr_capacity'];
	$query = "UPDATE events SET curr_capacity = $count + 1 WHERE id = $id";
	$run = mysqli_query($conn, $query);
	
	echo "Thank you for joining this event";
	} else {
		echo "Sorry this event is full";
		}
	}
} 

?>