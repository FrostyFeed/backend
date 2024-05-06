<?php
    function readWordsFromFile($filename) {
        $file_contents = file_get_contents($filename);
        return explode("\n", $file_contents);
    }
    function findUniqueWords($words1, $words2) {
        return array_diff($words1, $words2);
    }
    function findCommonWords($words1, $words2) {
        return array_intersect($words1, $words2);
    }
    function findWordsRepeated($words1, $words2) {
        $counts1 = array_count_values($words1);
        $counts2 = array_count_values($words2);
        $repeats1 = [];
        $repeats2 = [];
        foreach ($counts1 as $value => $count) {
            if($count > 2){
                array_push($repeats1,$value);
            }
        }
        foreach ($counts2 as $value => $count) {
            if($count > 2){
                array_push($repeats2,$value);
            }
        }
        return array_intersect($repeats1,$repeats2);
    }
    function writeWordsToFile($filename, $words) {
        $file = fopen($filename, "w");
        if(is_array($words)){
            foreach ($words as $word) {
                fwrite($file, $word . "\n");
            }
        }
        else{
            fwrite($file, $words . "\n");
        }
        fclose($file);
    }
    $words_file1 = readWordsFromFile("file1.txt");
    $words_file2 = readWordsFromFile("file2.txt");
    $unique_words = findUniqueWords($words_file1, $words_file2);
    $common_words = findCommonWords($words_file1, $words_file2);
    $repeated_words = findWordsRepeated($words_file1, $words_file2);
    echo count($repeated_words);
    writeWordsToFile("unique_in_file1.txt", $unique_words);
    writeWordsToFile("common_in_both_files.txt", $common_words);
    writeWordsToFile("repeated_in_both_files.txt", $repeated_words);
    function deleteFile($filename) {
        if (file_exists($filename)) {
            unlink($filename);
            echo "Файл \"$filename\" був успішно видалений.";
        } else {
            echo "Файл \"$filename\" не існує.";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="filename">Ім'я файлу:</label><br>
        <input type="text" id="filename" name="filename"><br><br>
        <input type="submit" name="submit" value="Видалити файл">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $filename_to_delete = $_POST['filename'];
        deleteFile($filename_to_delete);
    }
    ?>
</body>
</html>