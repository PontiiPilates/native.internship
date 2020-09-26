<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$fio = var_to_str($_POST['resume_fio']); 
<<<<<<< HEAD
$about = $_POST['resume_about'];
// $about = var_to_str($_POST['resume_features']);
$direction = var_to_str($_POST['direction']);
$profile = var_to_url($_POST['profile']);
$phone = var_to_str($_POST['phone']);
$email = var_to_email($_POST['email']);
$datetime = time();

if (db_query("INSERT INTO `resumes`(
  `id`,
  `fio`,
  `features`,
  `about`,
  `direction`,
  `datetime`,
  `profile`,
  `phone`,
  `email`
  ) VALUES (
    NULL,
    '$fio',
    'suspended',
    '$about',
    '$direction',
    '$datetime',
    '$profile',
    '$phone',
    '$email'
  )")) {
=======
$features = var_to_str($_POST['resume_about']);
$about = var_to_str($_POST['resume_features']);
$datetime = time();

if (db_query("INSERT INTO `resumes`(`id`, `fio`, `features`, `about`, `datetime`) VALUES (NULL, '$fio', '$features', '$about', '$datetime')")) {
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  die('s: Резюме успешно добавлено');
} else {
  die('e: Не удалось добавить резюме');
}