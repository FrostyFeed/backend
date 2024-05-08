<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=lab5;port=3306;", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    

        $sql = "SELECT * FROM tov";
        $result = $pdo->query($sql);
        $table = '<table>';
        $table .= '<tr><td>Number</td><td>Name</td><td>Cost</td><td>Amount</td><td>Date</td></tr>';
        foreach($result as $row) {
            $table .= "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['cost'] . "</td><td>" . $row['kol'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
        $table .= '</table>';
        echo $table;

    ?>
    <a href="insert.php"><button>Додати запис</button></a>
    <form action="delete.php" method="get">
        <input type="submit" value="Вилучити запис">
        <input type="text" name="id" id="id">
    </form>
</body>
</html>
