
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" id="name" minlength="6" maxlength="20" required>
        </div>
        <div>
            <label for="">Last name</label>
            <input type="text" name="lastName" id="lastName" required minlength="6" maxlength="20">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="password" required minlength="6" maxlength="20">
        </div>
        <div>
            <label for="">Repeat password</label>
            <input type="password" name="password2" id="password2" required minlength="6" maxlength="20">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="">Adress</label>
            <input type="text" name="adress" id="adress" required minlength="6" maxlength="20">
        </div>
        <div>
            <label for="">Birth date</label>
            <input type="date" name="birth" id="birth" required>
        </div>
        <div>
            <label for="">Phone number</label>
            <input type="text" name="number" id="number" required minlength="8" maxlength="15">
        </div>
        <input type="submit" name="submit" value="Зареєструватись" >

    </form>


    <?php
        include "main.php";
        include "Model/user.php";
        function showError($msg){
            echo "<br>" . $msg . "<br>";
        }
        function checkPassword(){
            $pass1 = $_POST['password'];
            $pass2 = $_POST['password2'];
            if($pass1 == $pass2){
                return true;
            }
            else{
                showError("Паролі не спавпадають");
            }
        }
        function registration(){
            if(isset($_POST['submit']) && checkPassword()){
                $bd = new Db();
                $bd->registerUser(createUser());
            }
        }
        function createUser(){
            $user = new User($_POST['name'],$_POST['lastName'],$_POST['password'],$_POST['email'],$_POST['adress'],$_POST['number'],$_POST['birth']);
            return $user;
        }
        registration();

    ?>
</body>
</html>