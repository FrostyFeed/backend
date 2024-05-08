<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>

<h2>Order Confirmation</h2>

<?php
if (isset($_GET['product'])) {
    $selected_product = $_GET['product'];
    echo "<p>Your order for $selected_product has been placed successfully. Thank you!</p>";
} else {
    echo "<p>Oops! Something went wrong. Please try again.</p>";
}
?>

</body>
</html>
