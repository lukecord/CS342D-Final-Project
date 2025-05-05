<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main class="text-center">
        <section class="card">
            <h1 style="margin-bottom: 20px;">🔍 Search Blog Posts</h1>

            <form action="post_search_result.php" method="get" style="max-width: 400px; margin: 0 auto;">
                <label for="keyword" style="display: block; margin-bottom: 8px; font-weight: bold;">Search Keyword:</label>
                <input type="text" id="keyword" name="keyword" placeholder="Enter a keyword..." required>

                <input type="submit" value="Search" style="margin-top: 15px;">
            </form>
        </section>
    </main>

    <footer>
        <p>© <?= date('Y') ?> ℤ Media. Happy searching!</p>
    </footer>

</body>
</html>
