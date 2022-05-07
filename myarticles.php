<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Мои статьи";
include 'includes/head.php';
?>

<body class="blog-bg">
  <div class="container">
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/connect.php'; ?>
    <div class="d-flex flex-column mx-5">
      <div class="box-data text-center flex-row text-white">
        <div class="fa-account-circle"></div>
        <p class="data-name"><?= $_COOKIE["log"]; ?></p>
      </div>
      <a href="/createpost.php" class="btn disabl-btn mx-0 mt-2 mb-5" style="padding: 10px !important;">Написать статью</a>
    </div>
    <article class="d-flex justify-content-center mb-5">
      <?php
      $query = $connection->query("SELECT * FROM `articles` ORDER BY `pubdate` DESC");
      if (mysqli_num_rows($query) == 0) :
      ?>
        <span class="text-muted text-center">Напишите свою первую статью!</span>
      <?php
      endif;
      while ($res = mysqli_fetch_assoc($query)) :
      ?>
        <div class="card-box" style="width: 70rem; padding: 3rem 4rem">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h4><?= $res['title']; ?></h4>
            <div class="fa-category-3">
              <p class="text-macrticle"><?= $res['category']; ?></p>
            </div>
          </div>
          <div class="d-flex">
            <p class="text-macrticle" style="white-space: nowrap; overflow: hidden; "><?= $res['text']; ?></p>
          </div>
          <div class="d-flex align-items-center justify-content-between text-center">
            <div class="fa-bx-time">

              <p class="my-0"><?= $res['pubdate']; ?></p>
            </div>
            <div class="d-flex align-items-center justify-content-center text-center">
              <a href="/includes/deletepost.php?id=<?= $res['id']; ?>" class="btn disabl-btn w-50 mb-4">Удалить</a>
              <a href="/edit.php" class="btn brand-btn w-50 mb-4">Редактировать</a>
              <a href="/article.php" type="submit" id="authBtn" class="btn entry-btn w-50 mb-4">Посмотреть</a>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </article>
  </div>
</body>

</html>