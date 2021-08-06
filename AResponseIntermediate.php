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

if(isset($_POST['submit'])){

    $to = $_POST['email'];
    $from = "ryosman@iu.edu";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $from;
    mail($to,$message,$headers);
    mail($from,$message2,$headers2); 
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    } 
    

  
$id = $_POST['id'];  
if($row['id'] = $id) {
$sql = "UPDATE contact_us SET email='$to', admin='$message' WHERE id='$id'"; 
$result = mysqli_query($conn, $sql);
} else {
	echo "Error cannot update";
}



mysqli_close($conn); 
?>
