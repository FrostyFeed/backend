<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Online Store</title>
</head>
<body>

<h2>Welcome to Our Online Store</h2>

<ul>
    <li>Product 1 - $10</li>
    <li>Product 2 - $20</li>
    <li>Product 3 - $30</li>
</ul>

<form method="post" action="process_order.php">
    <label for="product">Select Product:</label>
    <select id="product" name="product">
        <option value="Product 1">Product 1 - $10</option>
        <option value="Product 2">Product 2 - $20</option>
        <option value="Product 3">Product 3 - $30</option>
    </select><br>
    <input type="submit" value="Place Order">
</form>

</body>
</html>