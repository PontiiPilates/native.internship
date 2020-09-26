<?php
session_unset();

var_dump($_SESSION);

if (!$_SESSION) {
    header('Location: http://internship.sfu-kras.ru');
} else {
    die('Не удалось завершить сеанс');
}