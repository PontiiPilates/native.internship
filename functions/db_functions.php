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
<<<<<<< HEAD
  $connect->set_charset("utf8");
=======
  $connect -> set_charset("utf8");
>>>>>>> 14f2d358b7413d095f0b07fc536f6370070d401f
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
 * Возвращает true либо false.
 */
function db_add($query)
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


function db_output_once($query)
{
  $sql = mysqli_query(connect(), $query);
  $res = mysqli_fetch_assoc($sql);
  return $res;
}
