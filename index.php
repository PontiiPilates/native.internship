<?php
session_start();
require('functions/db_functions.php');
require('functions/functions.php');
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
                <?php require('modules/search/block_search.php'); ?>
                <div class="content">

                    <?php

                    // !Сценарии вывода контента.
                    if ($_GET['block'] == 'student') {
                        // Просмотр практик.
                        require('chunks/block_applicant.php');
                    } elseif ($_GET['block'] == 'employer') {
                        // Просмотр резюме.
                        require('chunks/block_employer.php');
                    } elseif ($_GET['block'] == 'result') {
                        // Просмотр результатов поиска.
                        require('modules/search/block_search_result.php');
                    } else {
                        require('chunks/block_applicant.php');
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php require('chunks/links_scripts.php'); ?>
</body>

</html>