<header>
  
  <?php

  // echo '<pre>';
  // print_r($_SERVER['REQUEST_URI']);
  // echo '</pre>';
  
  ?>

  <div class="head">
    <a href="http://internship.sfu-kras.ru/student" class="logo">Биржа практик</a>
    <ul class="menu">
      <li class="menu-item"><a href="student" class="<?php if ($_SERVER['REQUEST_URI'] == '/student' || $_SERVER['REQUEST_URI'] == '/') {print 'menu-item-active'; }?>">Студенту</a></li>
      <li class="menu-item"><a href="employer" class="<?php if ($_SERVER['REQUEST_URI'] == '/employer') {print 'menu-item-active'; }?>">Работодателю</a></li>
      <li class="menu-item"><a href="howitworks" class="<?php if ($_SERVER['REQUEST_URI'] == '/howitworks') {print 'menu-item-active'; }?>">Как это работает</a></li>
      <?php if ($_SESSION['name'] == 'admin') : ?>
        <li class="menu-item"><a href="admin" class="<?php if (strpos($_SERVER['REQUEST_URI'], '/admin') !== false) {print 'menu-item-active'; }?>">Кабинет</a></li>
        <li class="menu-item"><a href="exit">Выйти</a></li>
      <?php endif; ?>
    </ul>
  </div>
</header>