<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `resumes` ORDER BY `id` DESC");

// echo '<pre>';
// print_r($k);
// echo '</pre>';

?>

<h3 <?php print $h3_style; ?>>Список резюме</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>ФИО соискателя</th>
      <th <?php print $th_style; ?>>Дата размещения</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['fio']; ?>" href="resume-reduction-<?php print $k['id']; ?>"><?php print cut_string($k['fio']); ?></a></td>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print normal_datetime($k['datetime']); ?></small></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

<?php require('chunks/modal_practice_view_reduction.php'); ?>