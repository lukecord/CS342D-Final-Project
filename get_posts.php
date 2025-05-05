<!-- Include necessary imports -->
<head>
    <link rel="stylesheet" href="style.css">
    <?php include 'navbar.php'; ?>
</head>

<?php

// Connect to the database
include '../db_connections/db_connect.php';

// Generate and send the query
$sql = "SELECT * FROM Posts;";
$result = $conn->query($sql);

// Display rows
echo "<main>";
if ($result->num_rows > 0) {
    echo "<ol>";
    while($row = $result->fetch_assoc()) {
        echo '<div class="post-card">';
        echo '<h3>' . htmlspecialchars($row["PostID"]) . ': ' . htmlspecialchars($row["Title"]) . '</h3>';
        echo '<p>' . nl2br(htmlspecialchars($row["Content"])) . '</p>';
        echo '</div>';

    }
    echo "</ol>";
} else {
    echo "0 results";
}
echo "</main> <footer> <p>© <?= date('Y') ?> ℤ Media. Happy searching!</p> </footer>";

// Close connection when finished
$conn->close();
?>
