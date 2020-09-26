<?php
date_default_timezone_set('Asia/Krasnoyarsk');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Временная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'Временные зоны скрипта и настройки INI-файла совпадают.';
}
?>