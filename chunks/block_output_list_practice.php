<?php
<<<<<<< HEAD
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `practices` ORDER BY timestamp DESC");
=======

$output = db_output_all("SELECT * FROM `practices`");

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '<pre>';
// print_r($k);
// echo '</pre>';
?>

<<<<<<< HEAD
<h3 <?php print $h3_style; ?>>Список практик</h3>

<table <?php print $table_style; ?>>

=======
<h3>Список практик</h3>

<table class="table table-striped table-hover">
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Название</th>
      <th <?php print $th_style; ?>>Компания</th>
      <th <?php print $th_style; ?>>Размещено</th>
    </tr>
  </thead>

  <tbody>
<<<<<<< HEAD
    <?php foreach ($output as $k) : ?>
      <?php
      $company_id = $k['company_id'];
      $company_name = db_output_once("SELECT `name` FROM `companys` WHERE id = '$company_id'");
      ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['title']; ?>" href="practice-reduction-<?php print $k['id']; ?>"><?php print cut_string($k['title']); ?></a></td>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print cut_string($company_name['name']); ?></small></td>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print normal_datetime($k['timestamp']); ?></small></td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
=======

    <!-- Вывод практик из базы данных -->
    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['title']; ?></td>
        <td><?php print $k['company_id']; ?></td>
        <td><?php print $k['timestamp']; ?></td>
        <td>
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#practiceModal" id="<?php //print $k['id']; ?>">Open modal</button> -->
          <a href="http://internship.sfu-kras.ru/admin.php?block=control-practice&practice-id=<?php print $k['id']; ?>" class="btn btn-primary">Открыть</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <!--  -->

  </tbody>
</table>

<?php require('chunks/modal_practice_view_reduction.php'); ?>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
