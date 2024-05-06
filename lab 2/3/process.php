<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        function start_session(){
            session_start();
            $_SESSION['data']=$_POST;
        }
        function load_login(){
            $login = $_POST['login'];
            echo "<p>Логін: $login</p>";
        }
        function load_password(){
            $password_first = $_POST['password1'];
            $password_second = $_POST['password2'];
            if($password_first != $password_second){
                echo "<p>Пароль: Не співпадає</p>";
            }
            else{
                echo "<p>Пароль: $password_first</p>";
            }
        }
        function load_gender(){
            if(isset($_POST['gender']))
            {
                $gender = $_POST['gender'];
                echo "<p>Стать: $gender</p>";
            }
        }
        function load_citie(){
            if(isset($_POST['citie']))
            {
                $citie = $_POST['citie'];
                echo "<p>Місто: $citie</p>";
            }
        }
        function load_games(){
            if(isset($_POST['games']))
            {
                $games = $_POST['games'];
                echo "Улюблені ігри: ";
                foreach($games as $game){
                    echo $game . " ";
                }
            }
        }
        function load_about(){
            if(isset($_POST['about']))
            {
                $about = $_POST['about'];
                echo "<br>Про себе: ";
                echo $about . "<br>";
            }
        }
        function load_photo(){
            if (isset($_FILES['photo'])) {
                $file_name = $_FILES['photo']['name'];
                $file_size = $_FILES['photo']['size'];
                $file_type = $_FILES['photo']['type'];
                $file_tmp_name = $_FILES['photo']['tmp_name'];
                $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
                if (!in_array($file_type, $allowed_types)) {
                    echo "<p>Помилка: Непідтримуваний тип файлу. Будь ласка, завантажте зображення у форматі JPEG, PNG або GIF.</p>";
                } else {
                    move_uploaded_file($file_tmp_name, "uploads/" . $file_name);
                    echo "Фотографія: <img style=\"width:250px;height:250px;\" src='uploads/$file_name' alt='Завантажена фотографія'><br>";
                }
            }
        }
        start_session();
        load_login();
        load_password();
        load_gender();
        load_citie();
        load_games();
        load_about();
        load_photo();
        echo "<a href=\"index.php\">Перейти на головну сторінку</a>"
    ?>
</body>
</html>