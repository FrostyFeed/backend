<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if(isset($_GET['lang'])) {
        $selected_lang = $_GET['lang'];
        setcookie('selected_lang', $selected_lang, time() + (6 * 30 * 24 * 60 * 60), "/");
    }
    $selected_lang = isset($_COOKIE['selected_lang']) ? $_COOKIE['selected_lang'] : 'ukr';
    echo "<p>Вибрана мова: ";
    switch ($selected_lang) {
        case 'ukr':
            echo "Українська";
            break;
        case 'eng':
            echo "English";
            break;
        case 'rus':
            echo "Русский";
            break;
        default:
            echo "Українська";
            break;
    }
    echo "</p>";
    ?>
    <?php
        session_start();
        $login = $password = $gender = $citie = $games = $about = $male = $female = "";
        
        if (isset($_SESSION['data'])) {
            $login = $_SESSION['data']['login'] ?? " ";
            $password = $_SESSION['data']['password1'] ?? "";
            $gender = $_SESSION['data']['gender'] ?? "";
            $citie = $_SESSION['data']['citie'] ?? "";
            $games = $_SESSION['data']['games'] ?? "";
            $about = $_SESSION['data']['about'] ?? "";
            if($gender == "чоловік"){
                $male = "checked";
            }
            elseif($gender == "жінка"){
                $female = "checked";
            }
            unset($_SESSION['data']);
        } 
        ?>
    <form enctype="multipart/form-data" method="post" action="process.php">
        <div class="main">
            <div class="section">
                <div class="label"><label for="login">Логін</label></div>
                <div class="input"><input type="text" name="login" id="login" value="<?php echo htmlspecialchars($login);?>"></div>
            </div>
            <div class="section">
                <div class="label"><label for="">Пароль</label></div>
                <div class="input"><input type="password" name="password1" id="password1" value="<?php echo htmlspecialchars($password);?>"></div>
            </div>
            <div class="section">
                <div class="label"><label for="">Пароль (ще раз)</label></div>
                <div class="input"><input type="password" name="password2" id="password2" value="<?php echo htmlspecialchars($password);?>"></div>
            </div>
            <div class="section">
                <div class="label"><label for="">Стать</label></div>
                <div class="input gender">
                    <input type="radio" id="male" name="gender" value="чоловік" <?php echo $male; ?>>
                    <label for="male">Чоловік</label>
                    <input type="radio" id="female" name="gender" value="жінка" <?php echo $female; ?>>
                    <label for="female">Жінка</label>
                </div>
            </div>
            <div class="section">
                <div class="label"><label for="">Місто</label></div>
                <div class="input">
                    <input list="cities" name="citie" id="citie" value="<?php echo htmlspecialchars($citie);?>">
                    <datalist id="cities">
                    <option value="Житомир">
                    <option value="Київ">
                    <option value="Львів">
                    </datalist>
                </div>
            </div>
            <div class="section">
                <div class="label"><label for="">Улюблені ігри</label></div>
                <div class="input">
                    <input type="checkbox" id="op1" name="games[]" value="футбол" <?php if(is_array($games)){if(in_array('футбол',$games)){echo "checked";}}?> >
                    <label for="op1"> футбол</label><br>
                    <input type="checkbox" id="op2" name="games[]" value="баскетбол" <?php if(is_array($games)){if(in_array('баскетбол',$games)){echo "checked";}}?>>
                    <label for="op2"> баскетбол</label><br>
                    <input type="checkbox" id="op3" name="games[]" value="волейбол" <?php if(is_array($games)){if(in_array('волейбол',$games)){echo "checked";}}?>>
                    <label for="op3"> волейбол</label><br>
                    <input type="checkbox" id="op4" name="games[]" value="шахи" <?php if(is_array($games)){if(in_array('шахи',$games)){echo "checked";}}?>>
                    <label for="op4"> шахи</label><br>
                    <input type="checkbox" id="op5" name="games[]" value="танки"<?php if(is_array($games)){if(in_array('танки',$games)){echo "checked";}}?>>
                    <label for="op5"> World of Tanks</label><br>
                </div>
            </div>
            <div class="section">
                <div class="label"><label for="">Про себе</label></div>
                <div class="input">
                    <textarea id="about" name="about" rows="7" cols="25"><?php echo htmlspecialchars($about) ?></textarea>
                </div>
            </div>
            <div class="section">
                <div class="label"><label for="">Фотографія</label></div>
                <div class="input">
                    <input type="file" id="photo" name="photo">
                </div>
            </div>
            <div class="section">
                <div class="label"></div>
                <div class="input">
                <input type="submit" value="Зареєстуватися" />
                </div>
            </div>
        </div>
        
    </form>
    <a href="index.php?lang=ukr"><img src="ukraine.png" alt="Українська"></a>
    <a href="index.php?lang=eng"><img src="usa.png" alt="English"></a>
    <a href="index.php?lang=rus"><img src="russia.png" alt="Русский"></a>

    
</body>
</html>