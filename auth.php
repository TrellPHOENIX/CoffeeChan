<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Авторизация";
include 'includes/head.php';
?>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<body class="blog-bg">

  <div class="container">
    <?php include 'includes/header.php'; ?>
    <div class="d-flex justify-content-center">
      <div class="card-box" style="width: 65rem">
        <div class="row align-items-center mx-5 my-5">
          <div class="col-lg-7">
            <div class="card-body text-center">
              <p class="text-entry-name">Авторизация</p>
              <h5 class="text-entry-title">С возвращением!</h5>
              <p class="text-entry-act">Войдите в свой аккаунт</p>
            </div>
            <form id="authForm" method="post" action="/includes/auth.php">
              <div class="mb-3">
                <input type="text" name="login" id="login" class="form-control-entry fa-account" placeholder="Логин">
              </div>
              <div class="mb-3">
                <input type="password" name="password" id="password" class="form-control-entry fa-password" placeholder="Пароль">
              </div>
              <div class="d-flex flex-column text-center">
                <button type="submit" id="authBtn" class="btn entry-btn w-100 mb-4">Войти</button>
                <p class="headline">или</p>
                <div class="optlink">
                  <p>Ещё нет аккаунта? <a href="/reg.php">Создать</a></p>
                </div>
              </div>
            </form>
          </div>
          <div class="col-auto d-none d-lg-block b-pict">
            <img class="bd-placeholder-img" src="/assets/img/hero-2.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/auth.js"></script>
</body>

</html>