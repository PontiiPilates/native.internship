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
    </tr>
  </thead>
  <tbody>

    <!-- Вывод откликов из базы данных -->
    <?php foreach ($output as $k) : ?>
      <tr>
        <td><?php print $k['datetime']; ?></td>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=employer&employer-id=<?php print $k['id']; ?>"><?php print $k['fullname']; ?></a></td>
        <?php
        // Вывод загловка практики.
        $resume_id = $k['resume_id'];
        $resume_fullname = db_output_once("SELECT fio FROM resumes WHERE id = '$resume_id'");
        ?>
        <td><a href="http://internship.sfu-kras.ru/admin.php?block=resume&resume-id=<?php print $resume_id; ?>"><?php print $resume_fullname['fio']; ?></a></td>
      </tr>
    <?php endforeach; ?>
    <!--  -->

  </tbody>
</table>