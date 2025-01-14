<?php
// Database connection variables
$servername = "localhost"; // Usually localhost
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password (empty for default)
$dbname = "rsolar";   // The name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
