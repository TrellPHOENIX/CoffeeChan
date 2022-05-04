<header id="navbar_top" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mx-auto py-3 mb-4">
  <a href="/index.php" class="d-flex align-items-center mx-0 col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <div class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0s">
      <img class="mx-0" src="/assets/img/logo.svg" width="45" alt="logo">
    </div>
    <span class="mx-0 px-3 pt-1 brand-logo">Coffee Chan</span>
  </a>
  <? if ($_COOKIE['log'] != '') : ?>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "link-active" : ""); ?>"><a href="../index.php" class="nav-link px-2 link-inline">Главная</a></li>
      <li class="<?php echo ($_SERVER['PHP_SELF'] == "/articles.php" ? "link-active" : ""); ?>"><a href="../articles.php" class="nav-link px-2 link-inline">Последние статьи</a></li>
      <li class="<?php echo ($_SERVER['PHP_SELF'] == "/myarticles.php" ? "link-active" : ""); ?>"><a href="../myarticles.php" class="nav-link px-2 link-inline">Мои статьи</a></li>
      <li><a href="#" class="nav-link px-2 link-inline">Категории</a></li>
    </ul>
    <div class="col-md-3 mx-0 text-end">
      <a href="../includes/exit.php" class="px-2 link-inline">Выйти</a>
    </div>
  <? else : ?>
    <div class="col-md-3 mx-0 text-end">
      <a class="px-2 link-inline" href="../auth.php">Войти</a>
      <a class="px-2 link-inline" href="../reg.php">Регистрация</a>
    </div>
  <? endif; ?>
</header>