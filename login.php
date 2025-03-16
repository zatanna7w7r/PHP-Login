<?php

$email = $_POST['email'];
$password = $_POST['password'];

$dbEmail = "example@gmail.com";
$dbPassword = "12345";


if($email == $dbEmail && $password == $dbPassword){
    header('location:dashboard.php');
} else {
    echo "Los datos ingresados son incorrectos";
}