<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$fio = $_POST['resume_fio'];
$features = $_POST['resume_features'];
$about = $_POST['resume_about'];
$resume_id = $_POST['resume_id'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
if (db_query("UPDATE `resumes` SET `fio` = '$fio', `features` = '$features', `about` = '$about' WHERE `id` = '$resume_id'")) {
    die('s: Резюме успешно обновлено');
} else {
    die('e: Не удалось обновить резюме');
}