<h3 class="mb-5">Отклики соискателей</h3>

<form action="/responds-applicants" method="POST" class="mb-5">
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
$sql = "SELECT * FROM `responds_applicants` WHERE `deleted` = 0 ORDER BY id DESC";
// По дате от
if ($date_begin && !$date_end && !$search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `datetime` > $date_begin AND `deleted` = 0 ORDER BY `id` DESC";
}
// По дате до
if ($date_end && !$date_begin && !$search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `datetime` < $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По диапазону дат
if ($date_begin && $date_end && !$search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `datetime` BETWEEN $date_begin AND $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке
if ($search_string && !$date_begin && !$date_end) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `fullname` LIKE '%$search_string%' AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке в диапазоне дат
if ($date_begin && $date_end && $search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `fullname` LIKE '%$search_string%' AND `datetime` BETWEEN $date_begin AND $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке от даты
if ($date_begin && !$date_end && $search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `fullname` LIKE '%$search_string%' AND `datetime` > $date_begin AND `deleted` = 0 ORDER BY `id` DESC";
}
// По строке до даты
if (!$date_begin && $date_end && $search_string) {
  $sql = "SELECT * FROM `responds_applicants` WHERE `fullname` LIKE '%$search_string%' AND `datetime` < $date_end AND `deleted` = 0 ORDER BY `id` DESC";
}

// Реализация запроса
$output = db_output_all($sql);
?>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Дата / время отклика</th>
      <th <?php print $th_style; ?>>ФИО соискателя</th>
      <th <?php print $th_style; ?>>Практика</th>
      <th <?php print $th_style; ?>></th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?> respond-applicant-row-id="<?php print $k['id']; ?>">
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print normal_datetime($k['datetime']); ?></small></td>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['fullname']; ?>" href="respond-applicant-<?php print $k['id']; ?>"><?php print cut_string($k['fullname']); ?></a></td>
        <?php
        // Вывод загловка практики.
        $practice_id = $k['popup_practice_id'];
        $practice_tittle = db_output_once("SELECT title FROM practices WHERE id = '$practice_id'");
        ?>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $practice_tittle['title']; ?>" href="short-practice-<?php print $practice_id; ?>"><?php print cut_string($practice_tittle['title']); ?></a></td>
        <td <?php print $td_style; ?>><a href="#" <?php print $close_style; ?> class="respond-applicant-close" id="<?php print $k['id']; ?>"><span aria-hidden="true">&times;</span></a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>