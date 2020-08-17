<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$category_id = $_POST['category_id'];


if (db_query("DELETE FROM categorys WHERE id = '$category_id'")) {
  die('s: Категория успешно удалена');
} else {
  die('e: Не удалось удалить категорию');
}