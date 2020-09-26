<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$program = $_POST['program'];
$direction = $_POST['direction'];
$code = $_POST['code'];
$direction_id = $_POST['direction_id'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
if (db_query("UPDATE `directions` SET `program` = '$program', `direction` = '$direction', `code` = '$code' WHERE `id` = '$direction_id'")) {
    die('s: Направление успешно обновлено');
} else {
    die('e: Не удалось обновить направление');
}