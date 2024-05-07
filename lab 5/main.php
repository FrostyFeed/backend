<?php

    $host = 'localhost';
    $dbname = 'lab5';
    $username= 'root';
    $password = '1234';
    $port = '3333';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;",$username,$password);


?>