<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `practices` ORDER BY timestamp DESC");
// echo '<pre>';
// print_r($k);
// echo '</pre>';
?>

<h3 <?php print $h3_style; ?>>Список практик</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Название</th>
      <th <?php print $th_style; ?>>Компания</th>
      <th <?php print $th_style; ?>>Размещено</th>
    </tr>
  </thead>

  <tbody>
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