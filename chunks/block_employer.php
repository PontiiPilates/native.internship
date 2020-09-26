<?php
$output = db_output_all("SELECT * FROM `resumes` ORDER BY `datetime` DESC");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<?php foreach ($output as $k) : ?>
  <div class="app-block">
    <div class="app-content">
      <div class="app-data">
        <h3 class="app-head"><?php print $k['fio']; ?></h3>
        <div class="app-features">
          <div class="app-feature"><?php print $k['direction']; ?></div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small"><?php print short_description($k['about']); ?>
        </div>
        <div class="app-desc app-desc-full">
          <p class="app-desc-p"><?php print $k['about']; ?></p>
        </div>
      </div>
    </div>

    <?php require('chunks/block_admin_data_employer.php'); // Блок с информацией о резюме для админа ?>

    <div class="button button-primary respond-resume" id="<?php print $k['id']; ?>" item-title="<?php print $k['fio']; ?>" >
      <img class="button-icon" src="img/add.svg" alt="Добавить">
      <div class="button-content">Откликнуться</div>
    </div>
    <!-- <div class="button button-done">
    <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
    <div class="button-content">Заявка отправлена</div>
  </div> -->
  </div>
<?php endforeach; ?>