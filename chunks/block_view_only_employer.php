<?php

$employer_id = $_GET['employer-id'];

$output = db_output_all("SELECT * FROM responds_employers WHERE id = '$employer_id'");

// echo '<pre>';
// print_r($output);
// echo '</pre>';


?>

<dl class="row">
  <dt class="col-sm-3">ФИО ответственного лица</dt>
  <dd class="col-sm-9"><?php print $output[0]['fullname']; ?></dd>

  <dt class="col-sm-3">Название компании</dt>
  <dd class="col-sm-9"><?php print $output[0]['company_name']; ?></dd>

  <dt class="col-sm-3">Номер телефона</dt>
  <dd class="col-sm-9"><?php print $output[0]['phone_number']; ?></dd>

  <dt class="col-sm-3">Почта</dt>
  <dd class="col-sm-9"><?php print $output[0]['email']; ?></dd>

  <dt class="col-sm-3">Дата и время отклика</dt>
  <dd class="col-sm-9"><?php print $output[0]['datetime']; ?></dd>

</dl>