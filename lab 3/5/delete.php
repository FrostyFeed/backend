<?php
if(isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if(file_exists($login)) {
        deleteFolder($login);
        echo "Папка \"$login\" була успішно видалена.";
    } else {
        echo "Помилка: Папка \"$login\" не знайдена.";
    }
}
function deleteFolder($folder) {
    if(is_dir($folder)) {
        $objects = scandir($folder);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($folder . "/" . $object) == "dir") {
                    deleteFolder($folder . "/" . $object);
                } else {
                    unlink($folder . "/" . $object);
                }
            }
        }
        reset($objects);
        rmdir($folder);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="submit">Delete</button>
    </form>
</body>
</html>