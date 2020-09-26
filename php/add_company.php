<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$company_logo = file_saver();

// Добавление компании в базу данных.
$company_name = $_POST['company_name'];

if (db_query("INSERT INTO `companys` (`id`, `name`, `logotip`) VALUES (NULL, '$company_name', '$company_logo')")) {
  die('s: Компания успешно добавлена');
} else {
  die('e: Не удалось добавить компанию');
}