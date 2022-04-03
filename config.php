<?php

    $connect = mysqli_connect("localhost", "root", "", "login_register");

    if(!$connect){
       echo "Connection error: " . mysqli_connect_error();
    }




?>