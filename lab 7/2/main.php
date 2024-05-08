<?php
include 'db_connect.php';
ob_start();
include 'generate_menu.php';
$menu_html = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Menu</title>
</head>
<body>

<h2>Dynamic Menu</h2>

<div>
    <?php echo $menu_html; ?>
</div>
<a href="add.php"><button>Add</button></a>
<a href="delete.php"><button>Delete</button></a>

</body>
</html>