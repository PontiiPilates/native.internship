<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// Валидация.
$file_type = $_FILES['company_logo']['type'];
$file_size = $_FILES['company_logo']['size'];

if ($file_type != 'image/jpeg') {
  die('w: Загрузите файл в формате .jpg');
}
if ($file_size > 1000000) {
  die('w: Максимальный размер загружаемого изображения - 1Мб');
}

// Релокация файла.
$tmp_name = $_FILES['company_logo']['tmp_name'];
$new_name = time() . '.jpg';
$new_path = $_SERVER['DOCUMENT_ROOT'] . '/img/company_logo/';

// Проверка загрузки.
if (!move_uploaded_file($tmp_name, $new_path . $new_name)) {
  die('e: Не удалось загрузить логотип компании');
}

// Добавление компании в базу данных.
$company_name = $_POST['company_name'];

if (db_add("INSERT INTO `companys` (`id`, `name`, `logotip`) VALUES (NULL, '$company_name', '$new_name')")) {
  die('s: Компания успешно добавлена');
} else {
  die('e: Не удалось добавить компанию');
}