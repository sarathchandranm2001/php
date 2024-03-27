<?php
// Database connection variables
$servername = "localhost"; // Change this if your database server is different
$username = "your_username";
$password = "sarath";
$dbname = "sarath";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
