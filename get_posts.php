<head>
    <link rel="stylesheet" href="style.css">
    <?php include 'navbar.php'; ?>
</head>
<?php
include '../db_connections/db_connect.php';
//include 'navbar.php';

$sql = "SELECT * FROM Posts;";
$result = $conn->query($sql);
echo "<main>";
if ($result->num_rows > 0) {
    echo "<ol>";
    while($row = $result->fetch_assoc()) {
        //echo "<div><h3>" . htmlspecialchars($row["PostID"]). ": " . htmlspecialchars($row["Title"])."</h3><p>".htmlspecialchars($row["Content"])."</p></div>";
        //echo "id: " . $row["PostID"]. " - Title: " . $row["Title"]. " - Content: " . $row["Content"]. "<br>";
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
$conn->close();
?>
