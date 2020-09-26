<?php

$respond_id = $_GET['respond-id'];

$output = db_output_all("SELECT * FROM responds_applicants WHERE id = '$respond_id'");

// echo '<pre>';
<<<<<<< HEAD
// print_r($_GET);
=======
// print_r($output);
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '</pre>';


?>

<dl class="row">
<<<<<<< HEAD
  <dt class="col-sm-3 text-secondary small">ФИО соискателя lists</dt>
  <dd class="col-sm-9"><?php print $output[0]['fullname']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Дата рождения</dt>
  <dd class="col-sm-9"><?php print $output[0]['birthday']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Гражданство</dt>
  <dd class="col-sm-9"><?php print $output[0]['citizenship']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Номер телефона</dt>
  <dd class="col-sm-9"><?php print $output[0]['phone_number']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Почта</dt>
  <dd class="col-sm-9"><?php print $output[0]['email']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Профиль в Вк</dt>
  <dd class="col-sm-9"><?php print $output[0]['vk_profile']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Уровень образования</dt>
  <dd class="col-sm-9"><?php print $output[0]['level_education']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Курс</dt>
  <dd class="col-sm-9"><?php print $output[0]['course']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Направление / специальность</dt>
  <dd class="col-sm-9"><?php print $output[0]['direction']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Форма образования</dt>
  <dd class="col-sm-9"><?php print $output[0]['form_education']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Соискатель о себе</dt>
  <dd class="col-sm-9"><?php print $output[0]['applicant_about']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Дата и время отклика</dt>
  <dd class="col-sm-9"><?php print normal_datetime($output[0]['datetime']); ?></dd>

</dl>

<!-- <form action="">
  <div class="form-group">
    <input type="submit" class="form-control" value="Удалить отклик">
  </div>
</form> -->
=======
  <dt class="col-sm-3">ФИО соискателя lists</dt>
  <dd class="col-sm-9"><?php print $output[0]['fullname']; ?></dd>

  <dt class="col-sm-3">Дата рождения</dt>
  <dd class="col-sm-9"><?php print $output[0]['birthday']; ?></dd>

  <dt class="col-sm-3">Гражданство</dt>
  <dd class="col-sm-9"><?php print $output[0]['citizenship']; ?></dd>

  <dt class="col-sm-3">Номер телефона</dt>
  <dd class="col-sm-9"><?php print $output[0]['phone_number']; ?></dd>

  <dt class="col-sm-3">Почта</dt>
  <dd class="col-sm-9"><?php print $output[0]['email']; ?></dd>

  <dt class="col-sm-3">Профиль в Вк</dt>
  <dd class="col-sm-9"><?php print $output[0]['vk_profile']; ?></dd>

  <dt class="col-sm-3">Уровень образования</dt>
  <dd class="col-sm-9"><?php print $output[0]['level_education']; ?></dd>

  <dt class="col-sm-3">Курс</dt>
  <dd class="col-sm-9"><?php print $output[0]['course']; ?></dd>

  <dt class="col-sm-3">Направление / специальность</dt>
  <dd class="col-sm-9"><?php print $output[0]['direction']; ?></dd>

  <dt class="col-sm-3">Форма образования</dt>
  <dd class="col-sm-9"><?php print $output[0]['form_education']; ?></dd>

  <dt class="col-sm-3">Соискатель о себе</dt>
  <dd class="col-sm-9"><?php print $output[0]['applicant_about']; ?></dd>

  <dt class="col-sm-3">Дата и время отклика</dt>
  <dd class="col-sm-9"><?php print $output[0]['datetime']; ?></dd>

</dl>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
