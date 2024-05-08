<?php
    if (isset($_GET['id'])) {
        $pdo = new PDO("mysql:host=localhost;dbname=lab5;port=3306;", 'root', '');
        $id = $_GET['id'];
        $sql = "DELETE FROM tov WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        try {
            $stmt->execute();
            echo "Запис з ID $id успішно видалено.";
        } catch (PDOException $e) {
            echo "Помилка видалення запису: " . $e->getMessage();
        }
    } else {
        echo "ID для видалення не передано.";
    }
?>