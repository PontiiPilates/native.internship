<?php if ($_SESSION['name'] == 'admin') : ?>
    <p><small>ФИО ответственного за практику:</small> <?php print $k['fio'] ?></p>
    <p><small>Должность:</small> <?php print $k['position'] ?></p>
    <p><small>Телефон:</small> <?php print $k['phone'] ?></p>
    <p><small>Почта:</small> <?php print $k['email'] ?></p>
<?php endif; ?>