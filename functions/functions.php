<?php
// require('functions/functions.php');


/**
 * Группа очищающих функций
 */

function var_to_str($var)
{
  // Очищает значение переменной до строки
  return filter_var($var, FILTER_SANITIZE_STRING);
}

function var_to_number($var)
{
  // Очищает значение переменной до целого числа
  return filter_var($var, FILTER_SANITIZE_NUMBER_INT);
}

function var_to_email($var)
{
  // Приводит значение переменной к email-адресу.
  return filter_var($var, FILTER_SANITIZE_EMAIL);
}

function var_to_url($var)
{
  // Приводит значение переменной к url-адресу.
  return filter_var($var, FILTER_SANITIZE_EMAIL);
}


/**
 * Осуществляет приём хранение и наименование загруженного файла.
 * Возвращает новое имя файла при успешном осуществлении хранения.
 */
<<<<<<< HEAD
=======
function var_to_number($var) {
  return filter_var($var, FILTER_SANITIZE_NUMBER_INT);
}

/**
 * Осуществляет приём хранение и наименование загруженного файла.
 * Возвращает новое имя файла при успешном осуществлении хранения.
 */
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
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
<<<<<<< HEAD
}



/**
 * Преобразует метку времени в читаемую дату.
 */
function normal_datetime($datetime)
{
  return date("d.m.Y / H:i:s", $datetime);
}

/** 
 * Обрезает текст для таблиц админки
 */
function cut_string($string) {
  return mb_strimwidth($string, 0, 30, '...');
}

/**
 * Обрезает текст для тизера выводимого материала.
 * Добавляет "Читать полностью".
 */
function short_description($string) {
  // Установка длинны тизера для всех
  $length = 300;
  if (strlen($string) > $length) {
    $output = mb_strimwidth($string, 0, $length, '... <span class="app-desc-full-toggle">Читать&nbsp;полностью</span>');
  } else {
    $output = $string;
  }
  return $output;
=======
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
}