<?php
require('../../functions/db_functions.php');
require('../../functions/functions.php');

// Запрос имён практик из базы данных.
$practice = db_output_all("SELECT DISTINCT direction FROM resumes");

// Пересборка массива для экспорта.
foreach ($practice as $k) {
    $titles[] = $k['direction'];
}
// echo '{ "suggestions": ' . json_encode($titles, JSON_UNESCAPED_UNICODE) . ' }';

// Выборка подхядящих элементов.
if (!empty($_GET['term'])) {
    $term = $_GET['term'];
    
    // Шаблон регекс.
    $pattern = '/' . preg_quote($term) . '/iu';
    
    // Выдача массива.
    echo json_encode(preg_grep($pattern, $titles));
    // autocomplete
    // echo '{ "query": "suggestions": ' . json_encode(preg_grep($pattern, $titles)) . ' }';
}