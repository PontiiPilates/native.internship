<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$citizenship = $_POST['citizenship'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$vk_profile = $_POST['vk_profile'];
$institute = $_POST['institute'];
$level_education = $_POST['level_education'];
$course = $_POST['course'];

// Нужна обработка переменной.
$direction = $_POST['direction'];
for ($i = 0; $i < count($direction); $i++) {
    if ($direction[$i]) {
        $direction = $direction[$i];
    }
}

$form_education = $_POST['form_education'];
$applicant_about = $_POST['applicant_about'];

// Будет использована для условия
$signature = $_POST['signature'];

$popup_practice_id = $_POST['popup_practice_id'];

$datetime = time();

if (db_query("INSERT INTO `responds_applicants` (
    `id`,
    `fullname`,
    `birthday`,
    `citizenship`,
    `phone_number`,
    `email`,
    `vk_profile`,
    `institute`,
    `level_education`,
    `course`,
    `direction`,
    `form_education`,
    `applicant_about`,
    `popup_practice_id`,
    `datetime`) VALUES (
        NULL,
        '$fullname',
        '$birthday',
        '$citizenship',
        '$phone_number',
        '$email',
        '$vk_profile',
        '$institute',
        '$level_education',
        '$course',
        '$direction',
        '$form_education',
        '$applicant_about',
        '$popup_practice_id',
        '$datetime')")) {
            die('s: Ваш отклик принят');
} else {
    die('e: Не удалось принять ваш отклик. Попробуёте позже.');
}