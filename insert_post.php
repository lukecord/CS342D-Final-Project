<?php
session_start();
if (!isset($_SESSION['userID'])) {
    header('Location: login.html');
}
?>

<head>
    <title>Add New Post</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'navbar.php'; ?>
</head>
<body>
    <h1>Add New Blog Post</h1>
    <form action="insert_post_result.php" method="post">
<!--        <label for="userid">User ID:</label><br> -->
<!--        <input type="text" id="userid" name="userid"><br> -->
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <label for="categoryid">Category ID:</label><br>
        <input type="text" id="categoryid" name="categoryid"><br>
        <input type="submit" value="Submit">
    </form>
</body>
