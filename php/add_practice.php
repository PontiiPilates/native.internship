<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$practice_title = var_to_str($_POST['practice_title']);
$practice_description = $_POST['practice_description'];
$practice_features = var_to_str($_POST['practice_features']);
$practice_company = var_to_number($_POST['practice_company']);
$practice_category = var_to_number($_POST['practice_category']);
$fio = var_to_str($_POST['fio']);
$position = var_to_str($_POST['position']);
$phone = var_to_str($_POST['phone']);
$email = var_to_email($_POST['email']);
$datetime = time();

if (db_query("INSERT INTO `practices`(
  `id`,
  `title`,
  `features`,
  `description`,
  `company_id`,
  `category_id`,
  `timestamp`,
  `fio`,
  `position`,
  `phone`,
  `email`
  ) VALUES (
    NULL,
    '$practice_title',
    '$practice_features',
    '$practice_description',
    '$practice_company',
    '$practice_category',
    '$datetime',
    '$fio',
    '$position',
    '$phone',
    '$email'
    )")) {
  die('s: Практика успешно добавлена');
} else {
  die('e: Не удалось добавить практику');
}