<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$id = $_POST['id'];

if (db_query("UPDATE responds_employers SET `deleted` = 1 WHERE id = $id")) {
  die('s: Отклик успешно удален');
} else {
  die('e: Не удалось удалить отклик');
}

// Вернуть все удаленные записи
// UPDATE responds_employers SET deleted = 0