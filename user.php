<html lang="ru">

<?php require('chunks/head.php'); ?>
<?php
// Проверка авторизации
if ($_SESSION['name'] == 'admin') {
  // Если admin авторизован, то осуществлять переход на страницу кабинета
  header('Location: admin');
}
?>

<body style="background-color: #fbfbfb">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-sm-12 col-md-6 align-self-center" style="margin-top: 64px;">
        <div class="form-user-block">
          <h2>Войти</h2>
          <form class="popup-content2" action="php/session_in.php" method="POST">
            <div class="popup-form-row">
              <div class="form-block-user">
                <input name="password" data-req="true" id="date" type="text" placeholder="Пароль" class="form-input">
                <input type="submit" class="button button-primary button-user" value="Войти">
                <!-- <div class="form-input-error-label">Обязательное поле</div> -->
              </div>
              <!-- <input type="submit" class="button button-primary" value="Войти"> -->
              <!-- <div class="form-block-user">
                <img class="button-icon" src="img/done.svg" alt="Добавить">
                <input type="submit" class="button button-primary" value="Войти">
              </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>