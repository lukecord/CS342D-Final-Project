<?php
include 'db_connect.php';

$sql = "SELECT * FROM Posts;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["PostID"]. " - Title: " . $row["Title"]. " - Content: " . $row["Content"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
