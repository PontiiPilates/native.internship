<?php
<<<<<<< HEAD
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `categorys`");

=======

$output = db_output_all("SELECT * FROM `categorys`");
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>

<<<<<<< HEAD
<h3 <?php print $h3_style; ?>>Список категорий</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Название</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> href="category-reduction-<?php print $k['id']; ?>"><?php print $k['name']; ?></a></td>
      </tr>
    <?php endforeach ?>
  </tbody>

=======
<table class="table table-striped table-hover">
  <h3>Список компаний</h3>
  <thead>
    <tr>
      <th>Название категории</th>
      <!-- <th>Логотип</th> -->
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['name']; ?></td>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=control-category&category-id=<?php print $k['id']; ?>" class="btn btn-link">Открыть</a></td>
      </tr>
    <?php endforeach ?>

  </tbody>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
</table>