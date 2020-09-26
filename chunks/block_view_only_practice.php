<?php
$practice_id = $_GET['practice-id'];

$output = db_output_once("SELECT * FROM `practices` WHERE id = '$practice_id'");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>



<?php
$company_id = $output['company_id'];
$company_output = db_output_once("SELECT * FROM `companys` WHERE id = '$company_id'");
?>

<dl class="row">
  <dt class="col-sm-3 text-secondary small">Наименование практики</dt>
  <dd class="col-sm-9"><?php print $output['title']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Ключевые слова</dt>
  <dd class="col-sm-9"><?php print $output['features']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Описание</dt>
  <dd class="col-sm-9"><?php print $output['description']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Название компании</dt>
  <dd class="col-sm-9"><?php print $company_output['name']; ?></dd>

  <dt class="col-sm-3 text-secondary small">Дата и время размещения практики</dt>
  <dd class="col-sm-9"><?php print normal_datetime($output['timestamp']); ?></dd>

</dl>

<template>
  <div class="app-block">
    <div class="app-content">
      <div class="app-data">
        <h3 class="app-head"><?php print $output['title']; ?></h3>
        <div class="app-features">
          <div class="app-feature"><?php print $output['features']; ?></div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small"><?php print $output['description']; ?><span class="app-desc-full-toggle">Читать&nbsp;полностью</span>
        </div>
        <div class="app-desc app-desc-full">
          <p class="app-desc-p"><?php print $output['description']; ?></p>
        </div>
      </div>
      <div class="app-company">
        <div class="app-company-logo">
          <img width="50" src="/img/company_logo/<?php print $company_output['logotip']; ?>" alt="<?php print $company_output['name']; ?>"></div>
        <div class="app-company-all"><?php print $company_output['name']; ?></div>
      </div>
    </div>
    <!-- <div class="button button-primary respond-practice" id="<?php print $output['id']; ?>">
      <img class="button-icon" src="img/add.svg" alt="Добавить">
      <div class="button-content">Откликнуться</div>
    </div> -->
    <!-- <div class="button button-done">
    <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
    <div class="button-content">Заявка отправлена</div>
  </div> -->
  </div>
</template>