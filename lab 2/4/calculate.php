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
        include "Function/func.php";
        $cord_x = $_POST['x'];
        $cord_y = $_POST['y'];
    ?>
    <table>
        <tr class="labels">
            <td>x<sup>y</sup></td>
            <td>x!</td>
            <td>my_tg(x)</td>
            <td>sin(x)</td>
            <td>cos(x)</td>
            <td>tg(x)</td>
        </tr>
        <tr>
            <td><?php echo htmlspecialchars(my_power($cord_x,$cord_y))?></td>
            <td><?php echo htmlspecialchars(my_factorial($cord_x))?></td>
            <td><?php echo htmlspecialchars(my_tan($cord_x))?></td>
            <td><?php echo htmlspecialchars(my_sin($cord_x))?></td>
            <td><?php echo htmlspecialchars(my_cos($cord_x))?></td>
            <td><?php echo htmlspecialchars(my_tan($cord_x))?></td>
        </tr>
    </table>
</body>
</html>