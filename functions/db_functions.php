<?php

/**
 * Устанавливает соединение с базой данных.
 * Возвращет соединение.
 */
function connect()
{
  $host = 'localhost';
  $user = 'internship';
  $password = 'choaF9ei';
  $db_name = 'db_internship';
  $connect = mysqli_connect($host, $user, $password, $db_name);
  $connect->set_charset("utf8");
  return $connect;
}

/**
 * Выполняет проверку соединения с базой данных.
 * Возвращает статус соединения.
 */
function check_connect()
{
  // $link = mysqli_connect("localhost", "root", "", "internship");
  $link = connect();
  if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  echo "Соединение с MySQL установлено!" . PHP_EOL;
  echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
  mysqli_close($link);
}

/**
 * Выполнает добавление записи в базу данных.
 * Выполняет удаление записи из базы данных.
 * Выполняет обновление записи в базе данных.
 * Возвращает true либо false.
 */
function db_query($query)
{
  $res = mysqli_query(connect(), $query);
  return $res;
}

/**
 * Выполняет вывод всех записей из базы данных в соответствии с запросом.
 * Возвращает ассоциативный массив.
 */
function db_output_all($query)
{
  $sql = mysqli_query(connect(), $query);
  $res = mysqli_fetch_all($sql, TRUE);
  return $res;
}

/**
 * Возвращает содержимое одной строки, найденной в базе данных.
 */
function db_output_once($query)
{
  $sql = mysqli_query(connect(), $query);
  $res = mysqli_fetch_assoc($sql);
  return $res;
}


/**
 * Выполняет проверку наличия записи в базе данных.
 */
<<<<<<< HEAD
function db_check($query)
{
  $sql = mysqli_query(connect(), $query);
  $res = mysqli_num_rows($sql);
  return $res;
}

/**
 * Возвращает все записи в таблице
 */
function db_count_all($table)
{
  $sql = mysqli_query(connect(), "SELECT COUNT(*) FROM $table");
  $res = mysqli_fetch_all($sql, TRUE);
  return ($res[0]['COUNT(*)']);
}

=======
function db_check($query) {
  $sql = mysqli_query(connect(), $query);
  $res = mysqli_num_rows($sql);
  return $res;
}
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
