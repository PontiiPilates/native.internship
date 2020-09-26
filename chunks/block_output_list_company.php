<?php
<<<<<<< HEAD
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `companys`");

=======

$output = db_output_all("SELECT * FROM `companys`");
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>

<<<<<<< HEAD
<h3 <?php print $h3_style; ?>>Список компаний</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Название</th>
      <th <?php print $th_style; ?>>Логотип</th>
=======
<table class="table table-striped table-hover">
  <h3>Список компаний</h3>
  <thead>
    <tr>
      <th>Название компании</th>
      <!-- <th>Логотип</th> -->
      <th>Действия</th>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    </tr>
  </thead>

  <tbody>
<<<<<<< HEAD
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>>
          <a <?php print $a_style; ?> href="company-reduction-<?php print $k['id']; ?>" class="btn btn-link"><?php print $k['name']; ?></a>
        </td>
        <td <?php print $td_style; ?>>
          <img <?php print $img_style; ?> src="img/company_logo/<?php print $k['logotip']; ?>" alt="<?php print $k['name']; ?>">
        </td>
      </tr>
    <?php endforeach ?>
=======

    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['name']; ?></td>
        <!-- <td><img width="50" src="img/company_logo/<?php print $k['logotip']; ?>" alt="<?php print $k['name']; ?>"></td> -->
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=control-company&company-id=<?php print $k['id']; ?>" class="btn btn-link">Открыть</a></td>
      </tr>
    <?php endforeach ?>

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  </tbody>

</table>