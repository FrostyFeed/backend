<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Loged</h2>
    <?php
        include "main.php";
        session_start();
        $db = new Db();
        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header("Location: login.php"); 
            exit();
        }
        if(isset($_POST['submit'])){
            
            $db->updateData($_POST['firstName'],$_POST['secondName'],$_POST['pass1'],$_POST['pass2'],$_POST['phone'],$_POST['address'],$_POST['birth_date']);
        }
        if (isset($_POST['delete_profile'])) {
            $db->deleteUser();
        }
        
    ?>

    <button id="showFormBtn">Змінити дані</button>

    <div id="myForm" style="display:none;">
        <form method="post" action="">
            <label for="firstName">First name:</label>
            <input type="text" id="firstName" name="firstName">
            <br>
            <label for="secondName">Second name:</label>
            <input type="text" id="secondName" name="secondName">
            <br>
            <label for="pass1">Password:</label>
            <input type="password" id="pass1" name="pass1">
            <br>
            <label for="pass2">Repeat password:</label>
            <input type="password" id="pass2" name="pass2">
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            <br>
            <label for="name">Phone number:</label>
            <input type="text" id="phone" name="phone">
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br>
            <label for="birthDay">Birthady:</label>
            <input type="date" id="birth_date" name="birth_date">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
    </div>
    <form method="post" action="">
        <input type="submit" name="logout" value="Вийти">
    </form>
    <form method="post" action="">
        <button type="submit" name="delete_profile">Видалити профіль</button>
    </form>
    <script>
    document.getElementById('showFormBtn').addEventListener('click', function() {
        document.getElementById('myForm').style.display = 'block';
    });
    </script>
</body>
</html>