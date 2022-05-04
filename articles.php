<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Статьи";
include 'includes/head.php';
?>

<body class="blog-bg">
  <div class="container">
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/connect.php'; ?>
    <main class="main">
      <article class="d-flex flex-column justify-content-start">
        <?php
        $query = $connection->query("SELECT * FROM `articles` ORDER BY `pubdate` DESC");
        if (mysqli_num_rows($query) == 0) :
        ?>
          <span class="text-muted text-center">На данный момент нет статей. Напишите свою статью первым!</span>
        <?php
        endif;
        while ($res = mysqli_fetch_assoc($query)) :
        ?>
          <div class="card-box mb-5" style="width: 65rem; padding: 2rem 2rem; height: 38%;">
            <div class="row">
              <div class="col-10 col-sm-8 col-lg-3 px-0">
                <div class="imgW">
                  <img class="d-block mx-0 img-fluid" alt="Person-1" width="250" loading="lazy" src="<?= $res['image']; ?>" />
                </div>
              </div>
              <div class="col-md-9 px-4">
                <h4><?= $res['title']; ?></h4>
                <p class="text-macrticle"><?= $res['text']; ?></p>
                <div class="box-category-adviсe">
                  <p class="text-macrticle"><?= $res['category']; ?></p>
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
        <?php
        endwhile;
        ?>
      </article>
      <aside>
        <hr>
        <div class="pretty-headline">
          <h5 class="pretty-header pretty-line">Категории постов</h5>
        </div>
        <div class="list-category">
          <div class="fa-category-history">
            <p>Интересные истории</p>
          </div>
        </div>
        <div class="line-bt"></div>
        <div class="list-category">
          <div class="fa-category-recipes">
            <p>Рецепты кофе</p>
          </div>
        </div>
        <div class="line-bt"></div>
        <div class="list-category">
          <div class="fa-category-adviсe">
            <p>Советы по приготовлению</p>
          </div>
        </div>
        <div class="line-bt"></div>
        <div class="list-category">
          <div class="fa-category-history">
            <p>Кофе и здоровье</p>
          </div>
        </div>
        <div class="line-bt"></div>
        <div class="poll">
          <p>Опрос</p>
        </div>
        <div class="poll-title">
          <p>Кофе для Вас:</p>
        </div>

        <div class="form-check my-3">
          <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
          <label class="form-check-label" for="exampleRadios1">
            просто пью за компанию с коллегами
          </label>
        </div>
        <div class="form-check my-3">
          <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            средство повышения трудоспособности
          </label>
        </div>
        <div class="form-check my-3">
          <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            источник удовольствия (нравится вкус и аромат)
          </label>
        </div>
        <div class="row align-items-center justify-content-center text-center">
          <button type="submit" id="pollBtn" class="btn brand-btn mb-4" style="max-width: 12rem;">Голосовать!</button>
        </div>
      </aside>
    </main>
</body>

</html>