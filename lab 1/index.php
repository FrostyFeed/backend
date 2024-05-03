<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 2
        echo "Полину в мріях в купель океану, <br> Відчую <b>шовковистість</b> глибини, <br>&nbsp;Чарівні мушлі з дна собі дістану,<br>&nbsp;&nbsp;&nbsp;Щоб <b><i>взимку</i></b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>тішили</u>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; мене<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вони...";
        //3
        $start = 1500;
        $dollar = round($start / 39);
        echo "<br>$start грн. можна обміняти на $dollar долар";
        //4
        $number = 5;
        $name = " ";
        if($number == 1){
            $name = "Січень";
        }
        elseif($number == 2){
            $name ="Лютий";
        }
        elseif($number == 3){
            $name="Березень";
        }
        elseif($number == 4){
            $name="Квітень";
        }
        elseif($number == 5){
            $name="Травень";
        }
        elseif($number == 6){
            $name="Червень";
        }
        elseif($number == 7){
            $name="Липень";
        }
        elseif($number == 8){
            $name="Серпень";
        }
        elseif($number == 9){
            $name="Вересень";
        }
        elseif($number == 10){
            $name="Жовтень";
        }
        elseif($number == 11){
            $name="Листопад";
        }
        elseif($number == 12){
            $name="Грудень";
        }
        echo "<br>$name";
        //5
        $letter = "б";
        $result = "";
        switch($letter){
            case 'а':
                case 'е':
                case 'є':
                case 'и':
                case 'і':
                case 'ї':
                case 'о':
                case 'у':
                case 'ю':
                case 'я':
                    $result ="голосна";
                    break;
                default:
                    $result = "приголосна";
        }
        echo "<br>$result";
        //6
        $rand = mt_rand(100,300);
        $string = strval($rand);
        $sum = intval($string[0]) + intval($string[1]) + intval($string[2]);
        $reverse = "$string[2]$string[1]$string[0]";
        $biggest = "";
        for($x = 0; $x<3;$x++){
            for($a = 0;$a < 2;$a++){
                if(intval($string[$a]) < intval($string[$a+1])){
                    $temp = $string[$a];
                    $string[$a] = $string[$a+1];
                    $string[$a+1] = $temp;
                }
            }
        }
        echo "<br> $rand $sum $reverse $string";
        //7.1
        function random_color(){
            $num = mt_rand(1,5);
            if($num ==1){
                return "red";
            }
            elseif($num == 2){
                return "blue";
            }
            elseif($num == 3){
                return "green";
            }
            elseif($num == 4){
                return "black";
            }
            elseif($num == 5){
                return "orange";
            }
        }
        function table($rows,$colms){
            $table = "<table>";
            for($row = 0 ;$row <$rows;$row++){
                $table .= "<tr>";
                for($col = 0;$col < $colms;$col++){
                    $color = random_color();
                    $table .= "<td style=\"width:150px;background-color: $color;height:150px\"></td>";
                }
                $table .="</tr>";
            }
            $table .= "</table>";
            echo $table;
        }
        table(2,5);
        //7.2
        function squares($number){
            $background = "<div style=\"backgound-color: black;width:100vw;height:100vh;position:relative; \">";
            for($a = 0;$a<$number;$a++){
                $rand_size = strval(mt_rand(50,100)) . "px";
                $rand_pos = strval(mt_rand(15,1000)) . "px";
                $background .= "<div style=\"background-color:red;width:$rand_size;height:$rand_size;position:absolute;left:$rand_pos;top:$rand_pos;\"></div>";
            }
            $background .="</div>";
            echo $background;
        }
        squares(4);

    ?>
</body>
</html>