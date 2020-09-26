<?php
require('functions/style_for_tables.php');
$output = db_output_all("SELECT * FROM `companys`");

// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>

<h3 <?php print $h3_style; ?>>Список компаний</h3>

<table <?php print $table_style; ?>>

  <thead>
    <tr <?php print $tr_head_style; ?>>
      <th <?php print $th_style; ?>>Название</th>
      <th <?php print $th_style; ?>>Логотип</th>
    </tr>
  </thead>

  <tbody>
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
  </tbody>

</table>