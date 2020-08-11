<?php
require('../functions/db_functions.php');
// require('../functions/functions.php');

$id = $_POST['id'];

$output = db_output_all("SELECT * FROM `practices` WHERE `id` = $id");


echo '<pre>';
print_r($output);
echo '</pre>';