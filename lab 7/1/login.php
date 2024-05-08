<?php
ob_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'password') {
        header("Location: profile.php");
        exit();
    } else {
        $_SESSION['message'] = "Incorrect username or password";
    }
}
header("Location: index.php");
exit();
?>