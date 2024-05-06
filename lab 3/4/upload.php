<?php
if(isset($_POST["submit"])) {
    if(isset($_FILES["image"])) {
        $file_name = $_FILES["image"]["name"];
        $file_tmp = $_FILES["image"]["tmp_name"];
        $file_type = $_FILES["image"]["type"];
        $upload_dir = "uploads/";
        move_uploaded_file($file_tmp, $upload_dir . $file_name);

        echo "Зображення успішно завантажено.";
    } else {
        echo "Помилка: файл не був завантажений.";
    }
}
?>