<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Регистрация";
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
              <p class="text-entry-name">Регистрация</p>
              <h5 class="text-entry-title">Добро пожаловать!</h5>
              <p class="text-entry-act"> Зарегистрируйте свой аккаунт</p>
            </div>
            <form id="regForm" method="post" action="" method="POST">
              <div class="mb-3">
                <input type="text" class="form-control-entry fa-group" placeholder="Имя" name="name" id="name" autocomplete="off">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control-entry fa-account" placeholder="Логин" name="login" id="login" autocomplete="off">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control-entry fa-password" placeholder="Пароль" name="password" id="password" autocomplete="off">
              </div>
              <div class="d-flex flex-column text-center">
                <button type="submit" id="regBtn" class="btn entry-btn w-100 mb-4" value="Sign up">Зарегистрироваться</button>
                <p class="headline">или</p>
                <div class="optlink">
                  <p>Уже есть аккаунт? <a href="/auth.php">Войти</a></p>
                </div>
              </div>
            </form>
          </div>
          <div class="col-auto d-none d-lg-block b-pict-2">
            <img class="bd-placeholder-img" src="/assets/img/hero-1.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/reg.js"></script>
</body>

</html>