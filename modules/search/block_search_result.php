<?php

/**
 * Способ поиска по множеству найденных вхождений
 */
$get_element = $_GET['query'];
$get_element = explode(' ', $get_element);

$sql_like = '';
$sql_table = '';

// Проверка URI на содержание искомого параметра
if (preg_match_all('/^\/search-student-/', $_SERVER['REQUEST_URI'], $matches, PREG_SET_ORDER, 0)) {
    $sql_table = 'title';
} elseif (preg_match_all('/^\/search-employer-/', $_SERVER['REQUEST_URI'], $matches, PREG_SET_ORDER, 0)) {
    $sql_table = 'direction';
}

for ($i = 0; count($get_element) > $i; $i++) {
    if ($i > 0) {
        $sql_like .= "AND $sql_table LIKE '%$get_element[$i]%'";
    } else {
        $sql_like = "$sql_table LIKE '%$get_element[$i]%'";
    }
}

?>

<?php if ($_GET['type'] == 'practices') : $output = db_output_all($sql = "SELECT * FROM practices WHERE $sql_like") ?>
    <?php foreach ($output as $k) : ?>
        <?php
        $company_id = $k['company_id'];
        $company_output = db_output_once("SELECT * FROM `companys` WHERE id = '$company_id'");
        ?>
        <div class="app-block">
            <div class="app-content">
                <div class="app-data">
                    <h3 class="app-head"><?php print $k['title']; ?></h3>
                    <div class="app-features">
                        <div class="app-feature"><?php print $k['features']; ?></div>
                        <!-- <div class="app-feature">Востребованно у студентов</div> -->
                    </div>
                    <div class="app-desc app-desc-small"><?php print short_description($k['description']); ?>
                    </div>
                    <div class="app-desc app-desc-full">
                        <p class="app-desc-p"><?php print $k['description']; ?></p>
                    </div>
                </div>
                <div class="app-company">
                    <div class="app-company-logo">
                        <img width="50" src="/img/company_logo/<?php print $company_output['logotip']; ?>" alt="<?php print $company_output['name']; ?>"></div>
                    <div class="app-company-all"><?php print $company_output['name']; ?></div>
                </div>
            </div>

            <?php require('chunks/block_admin_data_applicant.php'); // Блок с информацией о практике для админа ?>
            
            <div class="button button-primary respond-practice" id="<?php print $k['id']; ?>" item-title="<?php print $k['title']; ?>">
                <img class="button-icon" src="img/add.svg" alt="Добавить">
                <div class="button-content">Откликнуться</div>
            </div>
            <!-- <div class="button button-done">
            <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
            <div class="button-content">Заявка отправлена</div>
            </div> -->
        </div>
    <?php endforeach; ?>
<?php elseif ($_GET['type'] == 'resumes') : $output = db_output_all("SELECT * FROM resumes WHERE $sql_like") ?>
    <?php foreach ($output as $k) : ?>
        <div class="app-block">
            <div class="app-content">
                <div class="app-data">
                    <h3 class="app-head"><?php print $k['fio']; ?></h3>
                    <div class="app-features">
                        <div class="app-feature"><?php print $k['direction']; ?></div>
                        <!-- <div class="app-feature">Востребованно у студентов</div> -->
                    </div>
                    <div class="app-desc app-desc-small"><?php print short_description($k['about']); ?>
                    </div>
                    <div class="app-desc app-desc-full">
                        <p class="app-desc-p"><?php print $k['about']; ?></p>
                    </div>
                </div>
            </div>
            <div class="button button-primary respond-resume" id="<?php print $k['id']; ?>" item-title="<?php print $k['fio']; ?>">
                <img class="button-icon" src="img/add.svg" alt="Добавить">
                <div class="button-content">Откликнуться</div>
            </div>
            <!-- <div class="button button-done">
            <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
            <div class="button-content">Заявка отправлена</div>
            </div> -->
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php
// Вывод сообщения об отсутствии результата
if (!$output) {
    die('По вашему запросу ничего не найдено');
}
?>