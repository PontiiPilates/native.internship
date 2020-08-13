<?php

$output = db_output_all("SELECT * FROM `companys`");
// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>

<table class="table table-striped table-hover">
  <h3>Список компаний</h3>
  <thead>
    <tr>
      <th>Название компании</th>
      <!-- <th>Логотип</th> -->
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['name']; ?></td>
        <!-- <td><img width="50" src="img/company_logo/<?php print $k['logotip']; ?>" alt="<?php print $k['name']; ?>"></td> -->
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=control-company&company-id=<?php print $k['id']; ?>" class="btn btn-link">Открыть</a></td>
      </tr>
    <?php endforeach ?>

  </tbody>
</table>