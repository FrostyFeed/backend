<?php
include 'db_connect.php';
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>

<h2>Blog</h2>

<?php foreach ($posts as $post): ?>
    <div>
        <h3><?php echo $post['title']; ?></h3>
        <p><?php echo $post['content']; ?></p>
        <p>Posted by: <?php echo $post['author']; ?></p>
        <hr>
    </div>
<?php endforeach; ?>

</body>
</html>