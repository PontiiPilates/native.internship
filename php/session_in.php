<?php
require('../functions/db_functions.php');
require('../functions/functions.php');
session_start();


$user_password = db_output_once("SELECT `password` FROM `users` WHERE `username` = 'admin'");
$enter_password = $_POST['password'];
// print_r($enter_password);


if ($_SESSION['name'] == 'admin') {
    header('Location: http://internship.sfu-kras.ru/admin.php');
}

if ($user_password['password'] == $enter_password) {
    $_SESSION['name'] = 'admin';
    header('Location: http://internship.sfu-kras.ru/admin.php');
} else {
    header('Location: http://internship.sfu-kras.ru/user.php');
}