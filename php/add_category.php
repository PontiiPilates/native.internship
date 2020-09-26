<?php
require('../functions/db_functions.php');
require('../functions/functions.php');


// Добавление категори в базу данных.
$category_name = $_POST['category_name'];

if (db_query("INSERT INTO `categorys` (`id`, `name`) VALUES (NULL, '$category_name')")) {
  die('s: Категория успешно добавлена');
} else {
  die('e: Не удалось добавить Категорию');
}