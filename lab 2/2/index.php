<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1
        function reply($arr) {
            $sum = array_count_values($arr);
            foreach ($sum as $element => $amount) {
                if ($amount > 1) {
                    echo "$element\n";
                }
            }
        }
        $arr = array(1, 2, 3, 4, 1, 2, 5, 6, 7, 3, 8, 9, 1);
        reply($arr);
        //2
        function rand_name($arr){
            $amount = mt_rand(1,count($arr));
            $result = "";
            for($a=0;$a<mt_rand(1,count($arr));$a++){
                $rand = mt_rand(0,count($arr)-1);
                $result .= $arr[$rand];
            }
            return "<br>" . $result;
        }
        $components = ["fluf", "fy", "kins"];
        echo rand_name($components);
        //3
        function createArray() {
            $length = rand(3, 7); 
            $array = array(); 
            for ($i = 0; $i < $length; $i++) {
                $array[] = rand(10, 20); 
            }
            return $array;
        }
        function processArrays($array1, $array2) {
            $merged_array = array_merge($array1, $array2);
            $unique_array = array_unique($merged_array);
            sort($unique_array);
            return $unique_array;
        }
        $array1 = createArray();
        $array2 = createArray();
        $result_array = processArrays($array1, $array2);
        echo "<br>Масив 1: " . implode(", ", $array1) . "<br>";
        echo "Масив 2: " . implode(", ", $array2) . "<br>";
        echo "Результат: " . implode(", ", $result_array);
        //4
        function sortAssociativeArray($array, $sortBy) {
            if (!array_key_exists($sortBy, $array[0])) {
                return "Невірний ключ для сортування!";
            }
            $sort_values = array_column($array, $sortBy);
            if ($sortBy === 'вік') {
                array_multisort($sort_values, SORT_ASC, $array);
            } else {
                array_multisort($sort_values, SORT_ASC, $array);
            }
            return $array;
        }
        $users = array(
            array("ім'я" => "Олександр", "вік" => 25),
            array("ім'я" => "Іван", "вік" => 30),
            array("ім'я" => "Марія", "вік" => 20)
        );
        echo "<br>Сортування за віком: <br>";
        $sorted_by_age = sortAssociativeArray($users, 'вік');
        print_r($sorted_by_age);
        echo "<br><br>";
        echo "Сортування за іменем: <br>";
        $sorted_by_name = sortAssociativeArray($users, "ім'я");
        print_r($sorted_by_name);
    ?>
</body>
</html>