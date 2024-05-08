<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Увійти">
    </form>
    <a href="register.php"><button>Реєстрація</button></a>

    <?php
        include "main.php";
        function saveToSession($email,$pass){
            session_start();
            $_SESSION['succesful'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
        }
        function login(){
            if(isset($_POST['submit'])){
                $bd = new Db();
                if($bd->loginUser($_POST['email'],$_POST['password'])){
                    saveToSession($_POST['email'],$_POST['password']);
                    header("Location: menu.php");
                    exit;
                }
                
            }
        }
       
        function checkSession(){
            session_start();
            if(isset($_SESSION['succesful']) && $_SESSION['succesful']){
                header("Location: menu.php");
                exit;
            }
        }
        checkSession();
        login();
    ?>
</body>
</html>