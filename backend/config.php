<?php 

    $host = 'localhost';
    $user = "root";
    $pass = '';
    $db = 'food_express';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn){
        echo "Database connection :" . mysqli_connect_error();
    }

?>