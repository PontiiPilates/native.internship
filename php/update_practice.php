<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$title = $_POST['practice_title'];
$features = $_POST['practice_features'];
$description = $_POST['practice_description'];
$company_id = $_POST['practice_company'];
$category_id = $_POST['practice_category'];
$practice_id = $_POST['practice_id'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
if (db_query("UPDATE `practices` SET `title` = '$title', `features` = '$features', `description` = '$description', `company_id` = '$company_id', `category_id` = '$category_id' WHERE `id` = '$practice_id'")) {
    die('s: Практика успешно обновлена');
} else {
    die('e: Не удалось обновить практику');
}
