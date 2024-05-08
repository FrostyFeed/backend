<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
    $selected_product = $_POST['product'];
    http_response_code(303);
    header("Location: confirmation.php?product=$selected_product");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
