<?php
/**
 * Приводит значение переменной к строке.
 */
function var_to_str($var) {
  return filter_var($var, FILTER_SANITIZE_STRING);
}

/**
 * Приводит значение переменной к целому числу.
 */
function var_to_number($var) {
  return filter_var($var, FILTER_SANITIZE_NUMBER_INT);
}

/**
 * Осуществляет приём хранение и наименование загруженного файла.
 * Возвращает новое имя файла при успешном осуществлении хранения.
 */
function file_saver()
{
  // Валидация.
  $file_type = $_FILES['company_logo']['type'];
  $file_size = $_FILES['company_logo']['size'];
  if ($file_type != 'image/jpeg') {
    die('w: Загрузите файл в формате .jpg');
  }
  if ($file_size > 1000000) {
    die('w: Максимальный размер загружаемого изображения - 1Мб');
  }

  // Релокация.
  $tmp_name = $_FILES['company_logo']['tmp_name'];
  $new_name = time() . '.jpg';
  $new_path = $_SERVER['DOCUMENT_ROOT'] . '/img/company_logo/';

  // Проверка загрузки файла.
  if (!move_uploaded_file($tmp_name, $new_path . $new_name)) {
    die('e: Не удалось загрузить логотип компании');
  }
  return $new_name;
}