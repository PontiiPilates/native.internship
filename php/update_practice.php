<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

<<<<<<< HEAD
$title = var_to_str($_POST['practice_title']);
$features = $_POST['practice_features'];
$description = var_to_str($_POST['practice_description']);
$company_id = var_to_number($_POST['practice_company']);
$category_id = var_to_number($_POST['practice_category']);
$practice_id = var_to_number($_POST['practice_id']);
$fio = var_to_str($_POST['fio']);
$position = var_to_str($_POST['position']);
$phone = var_to_str($_POST['phone']);
$email = var_to_email($_POST['email']);
=======
$title = $_POST['practice_title'];
$features = $_POST['practice_features'];
$description = $_POST['practice_description'];
$company_id = $_POST['practice_company'];
$category_id = $_POST['practice_category'];
$practice_id = $_POST['practice_id'];
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// Обновление данных о компании в базе данных.
<<<<<<< HEAD
if (db_query("UPDATE `practices` SET 
`title` = '$title',
`features` = '$features',
`description` = '$description',
`company_id` = '$company_id',
`category_id` = '$category_id',
`fio` = '$fio',
`position` = '$position',
`phone` = '$phone',
`email` = '$email'
WHERE
`id` = '$practice_id'
")) {
=======
if (db_query("UPDATE `practices` SET `title` = '$title', `features` = '$features', `description` = '$description', `company_id` = '$company_id', `category_id` = '$category_id' WHERE `id` = '$practice_id'")) {
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    die('s: Практика успешно обновлена');
} else {
    die('e: Не удалось обновить практику');
}
