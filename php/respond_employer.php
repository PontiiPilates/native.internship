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
$popup_resume_id = $_POST['popup_resume_id'];
$datetime = time();

// Будет использована для условия
$signature = $_POST['signature'];

if (db_query("INSERT INTO `responds_employers` (
    `id`,
    `fullname`,
    `company_name`,
    `phone_number`,
    `email`,
    `resume_id`,
    `datetime`,
    `deleted`) VALUES (
        NULL,
        '$fullname',
        '$company_name',
        '$phone_number',
        '$email',
        '$popup_resume_id',
        '$datetime',
        0)")) {
            die('s: Ваш отклик принят');
} else {
    die('e: Не удалось принять ваш отклик. Попробуёте позже.');
}