<?php

/**
 * Устанавливает соединение с базой данных.
 * Возвращет соединение.
 */
function connect()
{
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'internship';
  return mysqli_connect($host, $user, $password, $db_name);
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