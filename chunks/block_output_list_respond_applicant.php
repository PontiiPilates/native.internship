<?php
$output = db_output_all("SELECT * FROM `responds_applicants`");
// echo '<pre>';
// print_r($practice_tittle);
// echo '</pre>';
?>

<h3>Отклики соискателей</h3>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Дата / время отклика</th>
      <th>ФИО соискателя</th>
      <th>Практика</th>
    </tr>
  </thead>
  <tbody>

    <!-- Вывод откликов из базы данных -->
    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['datetime']; ?></td>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=resume&respond-id=<?php print $k['id']; ?>"><?php print $k['fullname']; ?></a></td>
        <?php
        // Вывод загловка практики.
        $practice_id = $k['popup_practice_id'];
        $practice_tittle = db_output_once("SELECT title FROM practices WHERE id = '$practice_id'");
        ?>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=practice&practice-id=<?php print $practice_id; ?>"><?php print $practice_tittle['title']; ?></a></td>
      </tr>
    <?php endforeach; ?>
    <!--  -->

  </tbody>
</table>