<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Ім'я:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="comment">Коментар:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Додати коментар">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $file = fopen("comments.txt", "a");
            fwrite($file, "$name: $comment\n");
            fclose($file);
        }
        if(file_exists("comments.txt")) {
            echo "<h2>Всі коментарі:</h2>";
            $file = fopen("comments.txt", "r");
            while(!feof($file)) {
                $line = fgets($file);
                echo "<p>$line</p>";
            }
            fclose($file);
        } else {
            echo "<p>Поки що немає коментарів.</p>";
        }
    ?>
</body>
</html>