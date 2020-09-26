<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `categorys`");

// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>

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

</table>