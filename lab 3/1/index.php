<?php
    if(isset($_GET['font'])) {
        $selected_font = $_GET['font'];
        setcookie('selected_font', $selected_font, time() + (86400 * 30), "/");
    }
    $selected_font = isset($_COOKIE['selected_font']) ? $_COOKIE['selected_font'] : '10';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            font-size: <?php echo $selected_font . "px;";?>; 
        }
    </style>
</head>
<body>
    <a href="index.php?font=50">Великий шрифт</a>
    <a href="index.php?font=25">Середній шрифт</a>
    <a href="index.php?font=5">Маленький шрифт</a>
    <a href="page.php">New page</a>
    
</body>
</html>