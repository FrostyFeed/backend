<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=company_db;port=3306;", 'root', '');
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
        
            $sql = "DELETE FROM employees WHERE id = :id";
            $stmt = $pdo->prepare($sql);
        
            $stmt->bindParam(':id', $id);
        
            try {
                $stmt->execute();
                echo "Employee with ID $id deleted successfully.";
            } catch (PDOException $e) {
                echo "Error deleting employee: " . $e->getMessage();
            }
        }
    ?>
    <form method="post" action="">
        <label for="id">Employee ID:</label>
        <input type="text" id="id" name="id" required>
        <br>
        <input type="submit" name="submit" value="Delete Employee">
    </form>
</body>
</html>