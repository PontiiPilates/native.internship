<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$practice_title = var_to_str($_POST['practice_title']); 
$practice_description = var_to_str($_POST['practice_description']);
$practice_features = var_to_str($_POST['practice_features']);
$practice_company = var_to_number($_POST['practice_company']);
$datetime = time();

if (db_query("INSERT INTO `practices`(`id`, `title`, `features`, `description`, `company_id`, `timestamp`) VALUES (NULL, '$practice_title', '$practice_features', '$practice_description', '$practice_company', '$datetime')")) {
  die('s: Практика успешно добавлена');
} else {
  die('e: Не удалось добавить практику');
}