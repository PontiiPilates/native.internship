<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$category_name = $_POST['category_name'];
$category_id = $_POST['category_id'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
if (db_query("UPDATE `categorys` SET `name` = '$category_name' WHERE `id` = '$category_id'")) {
    die('s: Категория успешно обновлена');
} else {
    die('e: Не удалось обновить категорию');
}