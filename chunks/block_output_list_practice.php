<?php

<<<<<<< HEAD
$output = db_output_all("SELECT * FROM `practices`");

// echo '<pre>';
// print_r($k);
// echo '</pre>';
?>

=======
$a = mysqli_query(connect(), "SELECT * FROM `practices`");
$a = mysqli_fetch_all($a);

echo '<pre>';
print_r($a);
echo '<pre>';

?>



<!-- Таблица вывода практик -->
<!-- После открытия переходим на страницу вывода конкретной практики или показываем ее в попап окне-->
>>>>>>> 14f2d358b7413d095f0b07fc536f6370070d401f
<h3>Список практик</h3>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Название</th>
      <th>Компания</th>
      <th>Дата размещения</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>

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