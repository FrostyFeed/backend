<?php
$sql = "SELECT * FROM menu_items";
$stmt = $pdo->query($sql);
$menu_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<ul>';
foreach ($menu_items as $item) {
    echo '<li><a href="' . $item['link'] . '">' . $item['title'] . '</a></li>';
}
echo '</ul>';
?>