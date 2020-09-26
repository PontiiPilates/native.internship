<<<<<<< HEAD
<h3 class="mb-5">Отклики работодателей</h3>

<form action="/responds-employers" method="POST" class="mb-5">
  <div class="row">
    <div class="col">
      <label for="">Выберите дату от</label>
      <input name="date_begin" type="date" class="form-control">
    </div>
    <div class="col">
      <label for="">Выберите дату до</label>
      <input name="date_end" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for=""></label>
    <input name="search_string" type="text" class="form-control" placeholder="Поиск по вхождению подстроки">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-outline-dark" value="Искать">
  </div>
</form>

<?php
require('functions/style_for_tables.php');
$date_begin = strtotime($_POST['date_begin']);
$date_end = strtotime($_POST['date_end']);
$search_string = $_POST['search_string'];

// Стартовый запрос
$sql = "SELECT * FROM `responds_employers` WHERE `deleted` = 0 ORDER BY id DESC";
// По дате от
if ($date_begin && !$date_end && !$search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `datetime` > $date_begin AND `deleted` = 0 ORDER BY `id` DESC";
}
// По дате до
if ($date_end && !$date_begin && !$search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `datetime` < $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По диапазону дат
if ($date_begin && $date_end && !$search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `datetime` BETWEEN $date_begin AND $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке
if ($search_string && !$date_begin && !$date_end) {
  $sql = "SELECT * FROM `responds_employers` WHERE `fullname` LIKE '%$search_string%' AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке в диапазоне дат
if ($date_begin && $date_end && $search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `fullname` LIKE '%$search_string%' AND `datetime` BETWEEN $date_begin AND $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке от даты
if ($date_begin && !$date_end && $search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `fullname` LIKE '%$search_string%' AND `datetime` > $date_begin AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке до даты
if (!$date_begin && $date_end && $search_string) {
  $sql = "SELECT * FROM `responds_employers` WHERE `fullname` LIKE '%$search_string%' AND `datetime` < $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}

// Реализация запроса
$output = db_output_all($sql);
?>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Дата / время отклика</th>
      <th <?php print $th_style; ?>>ФИО ответственного лица</th>
      <th <?php print $th_style; ?>>Резюме</th>
      <th <?php print $th_style; ?>></th>
=======
<?php
$output = db_output_all("SELECT * FROM `responds_employers`");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<h3>Отклики работодателей</h3>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Дата / время отклика</th>
      <th>ФИО ответственного лица</th>
      <th>Резюме</th>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    </tr>
  </thead>

  <tbody>
<<<<<<< HEAD
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?> respond-employer-row-id="<?php print $k['id']; ?>">
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print normal_datetime($k['datetime']); ?></small></td>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['fullname']; ?>" href="respond-employer-<?php print $k['id']; ?>"><?php print cut_string($k['fullname']); ?></a></td>
=======

    <!-- Вывод откликов из базы данных -->
    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['datetime']; ?></td>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=employer&employer-id=<?php print $k['id']; ?>"><?php print $k['fullname']; ?></a></td>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
        <?php
        // Вывод загловка практики.
        $resume_id = $k['resume_id'];
        $resume_fullname = db_output_once("SELECT fio FROM resumes WHERE id = '$resume_id'");
        ?>
<<<<<<< HEAD
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> href="respond-resume-<?php print $resume_id; ?>"><?php print cut_string($resume_fullname['fio']); ?></a></td>
        <td <?php print $td_style; ?>><a href="#" <?php print $close_style; ?> class="respond-employer-close" id="<?php print $k['id']; ?>"><span aria-hidden="true">&times;</span></a></td>
      </tr>
    <?php endforeach; ?>
=======
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=resume&resume-id=<?php print $resume_id; ?>"><?php print $resume_fullname['fio']; ?></a></td>
      </tr>
    <?php endforeach; ?>
    <!--  -->

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  </tbody>

</table>