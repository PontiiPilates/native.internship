<?php
require('../functions/db_functions.php');

echo '<pre>';
print_r($_POST);
echo '</pre>';

$practice_name = $_POST['practice_name'];
$practice_description = $_POST['practice_description'];
$practice_feature = $_POST['practice_feature'];
$practice_company = $_POST['practice_company'];
$datetime = time();

if (db_add("INSERT INTO `practices`(`id`, `name`, `feature`, `description`, `company_id`, `datetime`) VALUES (NULL, '$practice_name', '$practice_feature', '$practice_description', '$practice_company', '$datetime')")) {
  exit('s: Практиука успешно добавлена');
} else {
  exit('e: Не удалось добавить практику');
}