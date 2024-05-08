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
        $sql = "SELECT * FROM employees";
        $stmt = $pdo->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>";
            echo "ID: " . $row['id'] . ", ";
            echo "Name: " . $row['name'] . ", ";
            echo "Position: " . $row['position'] . ", ";
            echo "Salary: " . $row['salary'];
            echo "</li>";
        }
    ?>
    <a href="insert.php"><button>Add new employee</button></a>
    <a href="update.php"><button>Change data</button></a>
    <a href="delete.php"><button>Delete employee</button></a>
    <?php
       $sql = "SELECT AVG(salary) AS average_salary FROM employees";
       $stmt = $pdo->query($sql);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       echo "<br>Average Salary of All Employees: " . $result['average_salary'];
    ?>
</body>
</html>