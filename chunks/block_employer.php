<?php
<<<<<<< HEAD
$output = db_output_all("SELECT * FROM `resumes` ORDER BY `datetime` DESC");
=======
$output = db_output_all("SELECT * FROM `resumes`");
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<<<<<<< HEAD
<?php foreach ($output as $k) : ?>
=======

<?php foreach ($output as $k) : ?>

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  <div class="app-block">
    <div class="app-content">
      <div class="app-data">
        <h3 class="app-head"><?php print $k['fio']; ?></h3>
        <div class="app-features">
<<<<<<< HEAD
          <div class="app-feature"><?php print $k['direction']; ?></div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small"><?php print short_description($k['about']); ?>
=======
          <div class="app-feature"><?php print $k['features']; ?></div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small"><?php print $k['about']; ?><span class="app-desc-full-toggle">Читать&nbsp;полностью</span>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
        </div>
        <div class="app-desc app-desc-full">
          <p class="app-desc-p"><?php print $k['about']; ?></p>
        </div>
      </div>
    </div>
<<<<<<< HEAD

    <?php require('chunks/block_admin_data_employer.php'); // Блок с информацией о резюме для админа ?>

    <div class="button button-primary respond-resume" id="<?php print $k['id']; ?>" item-title="<?php print $k['fio']; ?>" >
=======
    <div class="button button-primary respond-resume" id="<?php print $k['id']; ?>">
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
      <img class="button-icon" src="img/add.svg" alt="Добавить">
      <div class="button-content">Откликнуться</div>
    </div>
    <!-- <div class="button button-done">
    <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
    <div class="button-content">Заявка отправлена</div>
  </div> -->
  </div>
<<<<<<< HEAD
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
<?php endforeach; ?>