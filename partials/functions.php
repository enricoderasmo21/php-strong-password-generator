<?php

$pwLenght = $_GET["characters"];

function generatePw($lenght){
    
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz.,-_<>|!"£$%&/()=?^+@#*{}[]';

    $password = substr(str_shuffle($data), 0, $lenght);

    return $password;
}