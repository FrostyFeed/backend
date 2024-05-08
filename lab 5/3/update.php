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
            $name = $_POST['name'];
            $position = $_POST['position'];
            $salary = $_POST['salary'];
        
            $sql = "UPDATE employees SET name = :name, position = :position, salary = :salary WHERE id = :id";
            $stmt = $pdo->prepare($sql);
        
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':salary', $salary);
        
            try {
                $stmt->execute();
                echo "Employee updated successfully.";
            } catch (PDOException $e) {
                echo "Error updating employee: " . $e->getMessage();
            }
        }
    ?>
    <form method="post" action="">
        <label for="id">Employee ID:</label>
        <input type="text" id="id" name="id" required>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
        <br>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required>
        <br>
        <input type="submit" name="submit" value="Update Employee">
    </form>
</body>
</html>