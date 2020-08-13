<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

$company_name = $_POST['company_name'];
$company_id = $_POST['company_id'];
$company_logo = $_FILES['company_logo']['name'];

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if ($company_name) {
    $sql = "UPDATE `companys` SET `name` = '$company_name' WHERE `id` = '$company_id'";
}
if ($company_name && $company_logo) {
    $file_name = file_saver();
    $sql = "UPDATE `companys` SET `name` = '$company_name', `logotip` = '$file_name' WHERE `id` = '$company_id'";
}

// Обновление данных о компании в базе данных.
if (db_query($sql)) {
    die("s: Компания успешно обновлена: $file_name");
} else {
    die('e: Не удалось обновить компанию');
}