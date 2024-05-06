<?php
    session_start();
    $status = $_SESSION['loged'];
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        $username = $_SESSION['login'];
        $password = $_SESSION['pass'];
        if($username === "Admin" && $password === "password") {
            $message = "Добрий день, Адмін!";
            $_SESSION['loged'] = "true";
        }
        else{
            $_SESSION['loged'] = "false";
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
    <?php
        if(isset($_POST['login']) && isset($_POST['pass'])) {
            $username = $_POST['login'];
            $password = $_POST['pass'];
            $_SESSION["login"] = $username;
            $_SESSION["pass"] = $password;
            if($username === "Admin" && $password === "password") {
                $message = "Добрий день, Адмін!";
            } else {
                $message = "Невірний логін або пароль!";
            }
        }
    ?>
    <form action="" method="post" <?php if($status == "true") echo "style=\"display:none;\""?>>
        <label for="">Логін:</label>
        <input type="text" name="login" id="login">
        <label for="">Пароль:</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Вхід">
    </form>
    <?php if($message !== "") { echo "<p>$message</p>"; } ?>
</body>
</html>