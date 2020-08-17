<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$fio = var_to_str($_POST['resume_fio']); 
$features = var_to_str($_POST['resume_about']);
$about = var_to_str($_POST['resume_features']);
$datetime = time();

if (db_query("INSERT INTO `resumes`(`id`, `fio`, `features`, `about`, `datetime`) VALUES (NULL, '$fio', '$features', '$about', '$datetime')")) {
  die('s: Резюме успешно добавлено');
} else {
  die('e: Не удалось добавить резюме');
}