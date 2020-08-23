<?php

$resume_id = $_GET['resume-id'];


$output = db_output_once("SELECT * FROM `resumes` WHERE id = '$resume_id'");
// echo '<pre>';
// print_r($output);
// echo '</pre>';



?>



<div class="app-block">
  <div class="app-content">
    <div class="app-data">
      <h3 class="app-head"><?php print $output['fio']; ?></h3>
      <div class="app-features">
        <div class="app-feature"><?php print $output['features']; ?></div>
        <!-- <div class="app-feature">Востребованно у студентов</div> -->
      </div>
      <div class="app-desc app-desc-small"><?php print $output['about']; ?><span class="app-desc-full-toggle">Читать&nbsp;полностью</span>
      </div>
      <div class="app-desc app-desc-full">
        <p class="app-desc-p"><?php print $output['about']; ?></p>
      </div>
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