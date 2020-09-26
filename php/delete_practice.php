<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$practice_id = $_POST['practice_id'];


if (db_query("DELETE FROM practices WHERE id = '$practice_id'")) {
  die('s: Практика успешно удалена');
} else {
  die('e: Не удалось удалить практику');
}