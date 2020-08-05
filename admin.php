<html lang="en">

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
        <ul>
          <li class="mb-3"><a href="?block=add-practice" class="btn btn-primary">Добавить практику</a></li>
          <li class="mb-3"><a href="##" class="btn btn-secondary">Добавить резюме</a></li>
          <li class="mb-3"><a href="##" class="btn btn-info">Добавить компанию</a></li>
        </ul>
        <hr>
        <ul>
          <li class="mb-1"><a href="?block=list-practice" class="btn btn-link">Практики</a></li>
          <li class="mb-1"><a href="##" class="btn btn-link">Резюме</a></li>
          <li class="mb-1"><a href="##" class="btn btn-link">Компании</a></li>
        </ul>
        <hr>
        <ul>
          <li class="mb-1"><a href="?block=output_list_respond_applicant" class="btn btn-link">Отклики соискателей</a></li>
          <li class="mb-1"><a href="##" class="btn btn-link">Отклики работодателей</a></li>
        </ul>
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="content">

          <?php
          // Сценарии изменения контента.
          // TODO: Хорошо бы сделать переменные в отдельном файле с GET-параметрами. Для стандартизации.
          if ($_GET['block'] == 'add-practice') {
            require('chunks/block_add_practice.php');
          }
          if ($_GET['block'] == 'list-practice') {
            require('chunks/block_output_list_practice.php');
          }
          if ($_GET['block'] == 'output_list_respond_applicant') {
            require('chunks/block_output_list_respond_applicant.php');
          }
          ?>



          <?php // require('chunks/block_add_resume.php');
          ?>
          <?php // require('chunks/block_add_company.php');
          ?>


          <?php // require('chunks/block_output_list_resume.php');
          ?>
          <?php // require('chunks/block_output_list_company.php');
          ?>


          <?php // require('chunks/block_output_list_respond_employer.php');
          ?>

        </div>
      </div>
    </div>
  </div>
  <?php require('chunks/links_scripts.php'); ?>
</body>

</html>