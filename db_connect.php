<?php
$servername = "localhost";
$username = "editor";
$password = "KUvei3G$*dsSbJE2D&de";
$dbname = "BlogDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

echo "Connecting...";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
