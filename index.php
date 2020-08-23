<?php
require('functions/db_functions.php');
?>
<html lang="ru">
<?php require('chunks/head.php'); ?>

<body>
    <?php require('chunks/popup_applicant.php'); ?>
    <?php require('chunks/popup_employer.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-3 col-md-12">
                <?php require('chunks/header.php'); ?>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-3 col-sm-12">
                <?php require('chunks/block_filter.php'); ?>
            </div>
            <div class="col-lg-9 col-sm-12">
                <?php require('chunks/block_search.php'); ?>
                <div class="content">

                    <?php
                    // !Сценарии вывода контента.
                    // Просмотр откликов соискателей.
                    if ($_GET['block'] == 'student') {
                        require('chunks/block_applicant.php');
                    }

                    // Просмотр откликов соискателей.
                    if ($_GET['block'] == 'employer') {
                        require('chunks/block_employer.php');
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php require('chunks/links_scripts.php'); ?>
</body>

</html>