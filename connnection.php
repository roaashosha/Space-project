<?php
// Establish a database connection (replace 'your_username', 'your_password', and 'your_database' with your actual credentials)
$connection = mysqli_connect('localhost', 'root', '','login' );

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
?>
