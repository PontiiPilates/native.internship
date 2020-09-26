<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$fio = $_POST['resume_fio'];
<<<<<<< HEAD
// $features = $_POST['resume_features'];
$about = $_POST['resume_about'];
$direction = $_POST['direction'];
$resume_id = $_POST['resume_id'];

$profile = var_to_url($_POST['profile']);
$phone = var_to_str($_POST['phone']);
$email = var_to_email($_POST['email']);

=======
$features = $_POST['resume_features'];
$about = $_POST['resume_about'];
$resume_id = $_POST['resume_id'];

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
<<<<<<< HEAD
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
=======
if (db_query("UPDATE `resumes` SET `fio` = '$fio', `features` = '$features', `about` = '$about' WHERE `id` = '$resume_id'")) {
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    die('s: Резюме успешно обновлено');
} else {
    die('e: Не удалось обновить резюме');
}