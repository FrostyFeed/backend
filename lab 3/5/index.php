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
        <button type="submit" name="submit">Login</button>
    </form>
    <a href="delete.php">Delete</a>
    <?php
        if(isset($_POST['submit'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        if(!file_exists($login)) {
            mkdir($login);
            mkdir($login . "/video");
            mkdir($login . "/music");
            mkdir($login . "/photo");
            $video_files = ["video1.mp4", "video2.mp4"];
            $music_files = ["music1.mp3", "music2.mp3"];
            $photo_files = ["photo1.jpg", "photo2.jpg"];
            foreach ($video_files as $video_file) {
                file_put_contents($login . "/video/" . $video_file, "");
            }
            foreach ($music_files as $music_file) {
                file_put_contents($login . "/music/" . $music_file, "");
            }
            foreach ($photo_files as $photo_file) {
                file_put_contents($login . "/photo/" . $photo_file, "");
            }
            echo "Папка \"$login\" успішно створена.";
            } else {
                echo "Помилка: Папка \"$login\" вже існує.";
            }
        }
    ?>
</body>
</html>