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
        p{
            font-size: <?php echo $selected_font . "px;";?>; 
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi hic ipsam asperiores quam, ipsum quos nisi corrupti odit ad nesciunt sed harum, dolorem sapiente qui dolores. Facere, sapiente rem!</p>
</body>
</html>