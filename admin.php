<?php
require('functions/db_functions.php');
require('functions/functions.php');
date_default_timezone_set('Asia/Krasnoyarsk');


// Осуществляем доступ к странице только авторизованным пользователям.
session_start();
if (!$_SESSION) {
  die('Упс, как вы тут оказались?');
}

?>

<html lang="ru">

<!-- Подключил бутстрап на этой странице, чтобы быстренько накидать основные стили. -->

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

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
        <?php require('chunks/block_secondary_menu.php'); ?>
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="content">
          <?php require('chunks/block_alert.php'); ?>

          
          
          <?php
          // !Блок старта админки
          if (!$_GET['block']) {
            require('chunks/block_help_reduction.php');
          }

          // !Блоки добавления
          // Добавление практики
          if ($_GET['block'] == 'add-practice') {
            require('chunks/block_add_practice.php');
          }
          // Добавление резюме
          if ($_GET['block'] == 'add-resume') {
            require('chunks/block_add_resume.php');
          }
          // Добавление компании
          if ($_GET['block'] == 'add-company') {
            require('chunks/block_add_company.php');
          }
          // Добавление категории
          if ($_GET['block'] == 'add-category') {
            require('chunks/block_add_category.php');
          }
          // Добавление направление
          if ($_GET['block'] == 'add-direction') {
            require('chunks/block_add_direction.php');
          }
          
          // !Блоки просмотра
          // Просмотр списка практик
          if ($_GET['block'] == 'list-practices') {
            require('chunks/block_output_list_practice.php');
          }
          // Просмотр списка резюме
          if ($_GET['block'] == 'list-resume') {
            require('chunks/block_output_list_resume.php');
          }
          // Просмотр списка компаний
          if ($_GET['block'] == 'list-company') {
            require('chunks/block_output_list_company.php');
          }
          // Просмотр списка категорий
          if ($_GET['block'] == 'list-category') {
            require('chunks/block_output_list_category.php');
          }
          // Просмотр списка направлений
          if ($_GET['block'] == 'list-directions') {
            require('chunks/block_output_list_directions.php');
          }

          // !Блоки редактирования материалов
          // Просмотр и редактирование практики
          if ($_GET['block'] == 'control-practice') {
            require('chunks/block_control_practice.php');
          }
          // Просмотр и редактирование резюме
          if ($_GET['block'] == 'control-resume') {
            require('chunks/block_control_resume.php');
          }
          // Просмотр и редактирование компании
          if ($_GET['block'] == 'control-company') {
            require('chunks/block_control_company.php');
          }
          // Просмотр и редактирование категории
          if ($_GET['block'] == 'control-category') {
            require('chunks/block_control_category.php');
          }

          // Просмотр и редактирование направления
          if ($_GET['block'] == 'control-direction') {
            require('chunks/block_control_direction.php');
          }

          // !Блоки просмотра откликов
          // Просмотр откликов соискателей.
          if ($_GET['block'] == 'responds_applicants') {
            require('chunks/block_output_list_respond_applicant.php');
          }
          // Просмотр откликов работодателей
          if ($_GET['block'] == 'responds_employers') {
            require('chunks/block_output_list_respond_employer.php');
          }

          // !Блоки просмотра сведений
          // Просмотр сведений соискателя
          if ($_GET['block'] == 'applicant') {
            require('chunks/block_view_only_applicant.php');
          }
          // Просмотр сведений работодателя
          if ($_GET['block'] == 'employer') {
            require('chunks/block_view_only_employer.php');
          }
          // Просмотр резюме
          if ($_GET['block'] == 'resume') {
            require('chunks/block_view_only_resume.php');
          }
          // Просмотр практики
          if ($_GET['block'] == 'practice') {
            require('chunks/block_view_only_practice.php');
          }

          ?>

        </div>
      </div>
    </div>
  </div>
  <?php require('chunks/links_scripts.php'); ?>
</body>

</html>