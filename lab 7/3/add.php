<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
</head>
<body>

<h2>Add New Post</h2>

<form method="post" action="">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea><br>
    <label for="author">Your Name:</label><br>
    <input type="text" id="author" name="author" required><br>
    <input type="submit" value="Add Post">
</form>

<?php
include 'db_connect.php';

if (isset($_POST['title'], $_POST['content'], $_POST['author'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    ob_start();
    echo $content;
    $content_with_info = ob_get_clean();
    $sql = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content_with_info);
    $stmt->bindParam(':author', $author);
    $stmt->execute();
    header("Location: blog.php");
    exit();
}
?>
</body>
</html>