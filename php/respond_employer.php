<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$fullname = $_POST['fullname'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
<<<<<<< HEAD
$popup_resume_id = $_POST['popup_resume_id'];
$datetime = time();
=======
$resume_id = $_POST['popup_resume_id'];
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8

// Будет использована для условия
$signature = $_POST['signature'];

<<<<<<< HEAD
=======
$datetime = time();

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
if (db_query("INSERT INTO `responds_employers` (
    `id`,
    `fullname`,
    `company_name`,
    `phone_number`,
    `email`,
    `resume_id`,
<<<<<<< HEAD
    `datetime`,
    `deleted`) VALUES (
=======
    `datetime`) VALUES (
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
        NULL,
        '$fullname',
        '$company_name',
        '$phone_number',
        '$email',
<<<<<<< HEAD
        '$popup_resume_id',
        '$datetime',
        0)")) {
=======
        '$resume_id',
        '$datetime')")) {
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
            die('s: Ваш отклик принят');
} else {
    die('e: Не удалось принять ваш отклик. Попробуёте позже.');
}