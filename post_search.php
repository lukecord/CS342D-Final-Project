<!DOCTYPE html>
<html>
<head>
    <title>Search Posts</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'navbar.php';?>
</head>
<body>
    <h1>Search Blog Posts</h1>
    <form action="post_search_result.php" method="get">
        <label for="keyword">Search Keyword:</label><br>
        <input type="text" id="keyword" name="keyword"><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>
