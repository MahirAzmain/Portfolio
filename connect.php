<?php
// Database connection parameters
$host = "localhost";     // e.g., "localhost"
$username = "root";
$password = "";
$database = "mahir";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8
mysqli_set_charset($conn, "utf8");

// If you need to perform any additional configuration, you can do it here

?>
