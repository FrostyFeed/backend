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
            $name = $_POST['name'];
            $position = $_POST['position'];
            $salary = $_POST['salary'];
        
            $sql = "INSERT INTO employees (name, position, salary) VALUES (:name, :position, :salary)";
            $stmt = $pdo->prepare($sql);
        
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':salary', $salary);
        
            try {
                $stmt->execute();
                echo "New employee added successfully.";
            } catch (PDOException $e) {
                echo "Error adding employee: " . $e->getMessage();
            }
        }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
        <br>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required>
        <br>
        <input type="submit" name="submit" value="Add Employee">
    </form>
</body>
</html>