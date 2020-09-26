<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$unit_id_direction = $_POST['unit_id'];


if (db_query("DELETE FROM directions WHERE id = $unit_id_direction")) {
  die('s: Направление успешно удалено');
} else {
  die('e: Не удалось удалить направление');
}