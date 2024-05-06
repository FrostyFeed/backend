<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $words = file("file.txt");
    sort($words);
    file_put_contents("file_sorted.txt", $words);
    ?>
</body>
</html>