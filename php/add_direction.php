<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$program = var_to_str($_POST['program']); 
$direction = var_to_str($_POST['direction']);
$code = var_to_str($_POST['code']);

if (db_query("INSERT INTO `directions`(`id`, `program`, `direction`, `code`) VALUES (NULL, '$program', '$direction', '$code')")) {
  die('s: Направление успешно добавлено');
} else {
  die('e: Не удалось добавить направление');
}