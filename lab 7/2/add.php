<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu Item</title>
</head>
<body>

<h2>Add Menu Item</h2>

<form method="post" action="">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="link">Link:</label>
    <input type="text" id="link" name="link" required>
    <br>
    <input type="submit" name="submit" value="Add Menu Item">
</form>

<?php
include 'db_connect.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $sql = "INSERT INTO menu_items (title, link) VALUES (:title, :link)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':link', $link);
    $stmt->execute();
    header("Location: main.php");
    exit();
}
?>
</body>
</html>