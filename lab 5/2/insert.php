<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $pdo = new PDO("mysql:host=localhost;dbname=lab5;port=3306;", 'root', '');
            $name = $_POST['name'];
            $cost = $_POST['cost'];
            $kol = $_POST['kol'];
            $date = $_POST['date'];
        
            $sql = "INSERT INTO tov (name, cost, kol, date) VALUES (:name, :cost, :kol, :date)";
            $stmt = $pdo->prepare($sql);
        
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':cost', $cost);
            $stmt->bindParam(':kol', $kol);
            $stmt->bindParam(':date', $date);
        
            try {
                $stmt->execute();
                echo "Дані успішно вставлені до бази даних.";
            } catch (PDOException $e) {
                echo "Помилка вставки даних: " . $e->getMessage();
            }
        }
    ?>
    <form method="post" action="">
        <label for="name">Назва товару:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="cost">Вартість:</label>
        <input type="text" id="cost" name="cost" required>
        <br>
        <label for="kol">Кількість товару:</label>
        <input type="text" id="kol" name="kol" required>
        <br>
        <label for="date">Дата реалізації:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <input type="submit" name="submit" value="Додати запис">
    </form>
</body>
</html>