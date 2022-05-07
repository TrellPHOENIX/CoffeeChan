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
    <?php include 'includes/connect.php'; ?>
    <div class="d-flex justify-content-center pb-5 mb-5">
    <?php
      $query = $connection->query("SELECT * FROM `articles` ORDER BY `pubdate` DESC");
      if (mysqli_num_rows($query) == 0) :
      ?>
      <?php
      endif;
      while ($res = mysqli_fetch_assoc($query)) :
      ?>
      <div class="card-box" style="width: 75rem">
        <div class="row align-items-center justify-content-start mx-0 my-5" style="padding: 0 69px 0 69px;">
          <div class="col-lg-9">
            <div class="card-body text-center pb-5">
              <div class="d-flex flex-column justify-content-center text-center">
                <h3><?= $res['title']; ?></h3>
                <p class="headline"><?= $res['category']; ?></p>
              </div>
              <div class="row">
                <div class="col-md-11 align-items-center">
                  <p class="text-start"><?= $res['text']; ?></p>
                </div>
                <div class="col-1" style="margin: 3rem 0 0 0;">
                  <div class="imgA">
                    <img class="d-block mx-3 img-fluid" alt="Person-1" width="250" loading="lazy" src="<?= $res['image']; ?>">
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start text-center">
                <div class="fa-account-t">
                  <p class="my-0"><?= $_COOKIE["log"]; ?></p>
                </div>
                <div class="fa-bx-time">
                  <p class="my-0"><?= $res['pubdate']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
            endwhile;
        ?>

</body>

</html>