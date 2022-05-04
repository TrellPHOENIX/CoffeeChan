<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Написать статью";
include 'includes/head.php';
?>

<style>
  .headline:before,
  .headline:after {
    width: 20%;
  }
</style>

<body class="blog-bg">
  <div class="container">
    <?php include 'includes/header.php'; ?>
    <div class="d-flex justify-content-center pb-5 mb-5">
      <div class="card-box" style="width: 75rem">
        <div class="row align-items-center justify-content-start mx-0 my-5" style="padding: 0 69px 0 69px;">
          <div class="col-lg-9">
            <div class="card-body text-center pb-5">
              <div class="d-flex flex-column justify-content-center text-center">
                <h3>Степень обжарки кофе</h3>
                <p class="headline">Советы по приготовлению</p>
              </div>
              <div class="row">
                <div class="col-md-11 align-items-center">
                  <p class="text-start">
                    Натуральный кофе, в зависимости от сорта, действительно обжаривается по различным профилям. В результате всестороннего подхода к обжарке рождаются определённые виды обжарок и, соответственно, вкусы.
                    <br><br>
                    Обжарка кофе — это творчество, сопоставимое с работой художника. Процесс обжарки кофе не может идти сам по себе, произвольно. Постоянно надо наблюдать: визуально, обонянием, пробовать каждую стадию обжарки кофе.
                    <br><br>
                    Благодаря тёмной обжарке могут родиться вкуснейшие сорта кофе для приготовления эспрессо, и поэтому профессионалы никогда не пренебрегают тёмной обжаркой. Но во всём нужна мера и оценка специалиста. Если обжаривать ещё темнее, то начнётся процесс карбонизации и выделение масел, и, как следствие, запах пережжённого сахара, дыма и горечи во вкусе. Пережаренное зерно с масляным блеском — испорченный кофе с «перегоревшим» вкусом и ароматом.
                  </p>
                </div>
                <div class="col-1" style="margin: 3rem 0 0 0;">
                  <div class="imgA">
                    <img class="d-block mx-3 img-fluid" alt="Person-1" width="250" loading="lazy" src="/assets/img/coffee.jpg">
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start text-center">
                <div class="fa-account-t">
                  <p class="my-0"><?= $_COOKIE["log"]; ?></p>
                </div>
                <div class="fa-bx-time">
                  <p class="my-0">17:37:23 06.02.22</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>