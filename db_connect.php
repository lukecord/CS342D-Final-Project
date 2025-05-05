<?php
$servername = "localhost";
$username = "accessor";
$password = "n0bDJWkoxlIWJosaAPLD";
$dbname = "BlogDB";

// echo "Starting"; // Only needed for testing

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');

// echo "Connecting..."; // Only needed for testing

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Only needed for testing
?>
