
<?php

$output = db_output_all("SELECT * FROM `resumes`");

// echo '<pre>';
// print_r($k);
// echo '</pre>';
?>

<h3>Список резюме</h3>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ФОИ соискателя</th>
      <th>Дата размещения</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>

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

  </tbody>
</table>

<?php require('chunks/modal_practice_view_reduction.php'); ?>