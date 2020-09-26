<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM directions ORDER BY id DESC");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<h3 <?php print $h3_style; ?>>Список направлений</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Код</th>
      <th <?php print $th_style; ?>>Программа</th>
      <th <?php print $th_style; ?>>Направление</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($output as $k) : ?>
      <tr <?php print $tr_body_style; ?>>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print $k['code']; ?></small></td>
        <td <?php print $td_style; ?>><small <?php print $small_style; ?>><?php print $k['program']; ?></small></td>
        <td <?php print $td_style; ?>><a <?php print $a_style; ?> title="<?php print $k['direction']; ?>" href="direction-reduction-<?php print $k['id']; ?>"><?php print cut_string($k['direction']); ?></a></td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>