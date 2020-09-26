<?php if ($_SESSION['name'] == 'admin') : ?>
    <p><small>Профиль в Вк:</small> <?php print $k['profile'] ?></p>
    <p><small>Телефон:</small> <?php print $k['phone'] ?></p>
    <p><small>Почта:</small> <?php print $k['email'] ?></p>
<?php endif; ?>