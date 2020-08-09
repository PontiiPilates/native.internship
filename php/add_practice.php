<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$practice_name = var_to_str($_POST['practice_name']); 
$practice_description = var_to_str($_POST['practice_description']);
$practice_features = var_to_str($_POST['practice_feature']);
$practice_company = var_to_number($_POST['practice_company']);
$datetime = time();

if (db_add("INSERT INTO `practices`(`id`, `name`, `features`, `description`, `company_id`, `datetime`) VALUES (NULL, '$practice_name', '$practice_feature', '$practice_description', '$practice_company', '$datetime')")) {
  die('s: Практика успешно добавлена');
} else {
  die('e: Не удалось добавить практику');
}