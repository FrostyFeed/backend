<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Menu Item</title>
</head>
<body>

<h2>Delete Menu Item</h2>

<form method="post" action="">
    <label for="id">Menu Item ID:</label>
    <input type="text" id="id" name="id" required>
    <br>
    <input type="submit" name="submit" value="Delete Menu Item">
</form>
<?php
include 'db_connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM menu_items WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: main.php");
    exit();
}
?>
</body>
</html>