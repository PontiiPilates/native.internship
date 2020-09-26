<<<<<<< HEAD
<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `resumes` ORDER BY `id` DESC");
=======

<?php

$output = db_output_all("SELECT * FROM `resumes`");
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8

// echo '<pre>';
// print_r($k);
// echo '</pre>';
<<<<<<< HEAD

?>

<h3 <?php print $h3_style; ?>>Список резюме</h3>

<table <?php print $table_style; ?>>

=======
?>

<h3>Список резюме</h3>

<table class="table table-striped table-hover">
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>ФИО соискателя</th>
      <th <?php print $th_style; ?>>Дата размещения</th>
    </tr>
  </thead>

  <tbody>
<<<<<<< HEAD
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['fio']; ?>" href="resume-reduction-<?php print $k['id']; ?>"><?php print cut_string($k['fio']); ?></a></td>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print normal_datetime($k['datetime']); ?></small></td>
      </tr>
    <?php endforeach; ?>
=======

    <!-- Вывод практик из базы данных -->
    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['fio']; ?></td>
        <td><?php print $k['datetime']; ?></td>
        <td>
          <a href="http://internship.sfu-kras.ru/admin.php?block=control-resume&resume-id=<?php print $k['id']; ?>" class="btn btn-primary">Открыть</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <!--  -->
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8

  </tbody>
</table>

<?php require('chunks/modal_practice_view_reduction.php'); ?>