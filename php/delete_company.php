<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$company_id = $_POST['company_id'];


if (db_query("DELETE FROM companys WHERE id = '$company_id'")) {
  die('s: Компания успешно удалена');
} else {
  die('e: Не удалось удалить компанию');
}