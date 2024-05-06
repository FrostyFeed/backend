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
        $text = "RFDsfeif ldfspweqw dkkasd elwqsad";
        $search = "dkkasd";
        $change = "vlad";
        $result = str_replace($search,$change,$text);
        echo $result;
        //2
        $cities = "Л В У А Ф";
        $array = explode(' ',$cities);
        sort($array);
        $sorted = implode(' ',$array);
        echo "<br>$sorted";
        //3
        $addres = "D: \ WebServers \ home \ testsite \ www \ myfile.txt";
        $arr = explode("\\",$addres);
        $file = explode(".",$arr[count($arr)-1]);
        echo "<br>".$file[0];
        //4
        $date1_str = '10-02-2015';
        $date2_str = '15-02-2015';
        $date1 = DateTime::createFromFormat('d-m-Y', $date1_str);
        $date2 = DateTime::createFromFormat('d-m-Y', $date2_str);
        $interval = $date1->diff($date2);
        echo "<br>Кількість днів між датами: " . $interval->format('%a') . " днів";
        //5
        
        function create_password($length){
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
            $chars_arr = str_split($chars);
            $amount = strlen($chars);
            $password = " ";
            for($a = 0;$a<$length;$a++){
                $rand = mt_rand(1,$amount);
                $password .= $chars_arr[$rand];
            }
            return $password;
        }
        $password_new = create_password(2);
        echo "<br>".$password_new;

        function check_pass($password){
            if (strlen($password) < 8) {
                return false;
            }
            if (!preg_match("/[A-Z]/", $password)) {
                return false;
            }
            if (!preg_match("/[a-z]/", $password)) {
                return false;
            }
            if (!preg_match("/[0-9]/", $password)) {
                return false;
            }
            if (!preg_match("/[!@#\$%^&*()-_=+]/", $password)) {
                return false;
            }
            return true;
        }
        $check = check_pass($password_new);
        if($check == true){
            echo "<br>Пароль достатньо міцний";
        }
        else{
            echo "<br>Пароль не відповідає вимогам міцності";
        }
    ?>
</body>
</html>