<?php
$servername = "db.sice.indiana.edu";
$username = "i494f20_rwaseem";
$password = "my+sql=i494f20_rwaseem";
$database = "i494f20_rwaseem";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Your request has been sent. "; 

$title = $_POST['title'];
$date = $_POST['date'];
$description = $_POST['description'];
$id = $_POST['id'];
$max_capacity = $_POST['max_capacity'];



if($row['id'] = $id) {
$sql = "UPDATE events SET title='$title', event_date='$date', description='$description', max_capacity='$max_capacity' WHERE id='$id'";
$result = mysqli_query($conn, $sql);
	echo "We will update this event!";
} else {
	echo "Error cannot update";
}

mysqli_close($conn); 

?>

