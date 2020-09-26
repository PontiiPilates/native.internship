<?php
require('../functions/db_functions.php');
require('../functions/functions.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$resume_id = $_POST['resume_id'];


if (db_query("DELETE FROM resumes WHERE id = '$resume_id'")) {
  die('s: Резюме успешно удалено');
} else {
  die('e: Не удалось удалить резюме');
}