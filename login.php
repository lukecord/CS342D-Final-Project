<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM Users WHERE Username='$username' AND Passwrd='$password';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login Successful
    echo "Login Successful";
    // Set session variables or redirect to another page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: get_posts.html");
    exit;
} else {
    // Login Failed
    echo "Invalid Username or Password";
}

$conn->close();
?>
