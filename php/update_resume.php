<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$fio = $_POST['resume_fio'];
// $features = $_POST['resume_features'];
$about = $_POST['resume_about'];
$direction = $_POST['direction'];
$resume_id = $_POST['resume_id'];

$profile = var_to_url($_POST['profile']);
$phone = var_to_str($_POST['phone']);
$email = var_to_email($_POST['email']);

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
if (db_query("UPDATE `resumes` SET
`fio` = '$fio',
`features` = 'suspended',
`about` = '$about',
`direction` = '$direction',
`profile` = '$profile',
`phone` = '$phone',
`email` = '$email'
WHERE
`id` = '$resume_id'
")) {
    die('s: Резюме успешно обновлено');
} else {
    die('e: Не удалось обновить резюме');
}