<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Редактировать";
include 'includes/head.php';
?>

<body class="blog-bg">  
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/connect.php'; ?>
  <div class="container">
        <?php
            $article_id = $_GET['id'];
            $author = $_COOKIE['log'];
            $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$article_id'");
            if (mysqli_num_rows($query) == 0):
        ?>
    <div class="d-flex justify-content-center">
      <div class="card-box" style="width: 50rem">
        <div class="row align-items-center justify-content-center mx-0 my-5">
  
          <div class="col-lg-9">
            <div class="card-body text-center pb-5">
              <h3>Редактировать статью</h3>
            </div>
            <form id="regForm" action="/includes/edit.php" method="POST">
              <div class="mb-3">
                <label for="caption" class="mb-1 px-3">Введите заголовок</label>
                <input type="text" name="title" id="title" class="form-control-entry" placeholder="Заголовок" value="<?=$res['title'];?>">
              </div>
              <div class="mb-3">
                <label  for="category" class="mb-1 px-3">Выберите категорию</label>  
                <select class="form-select" aria-label="Default select example">
                  <option type="category" name="category" id="category" value="<?=$res['category'];?>" selected>Категория</option>
                  <option value="1">Интересные истории</option>
                  <option value="2">Рецепты кофе</option>
                  <option value="3">Советы по приготовлению</option>
                  <option value="3">Кофе и здоровье</option>
                </select>
              </div>
              <div class="mb-4">
                <textarea name="text" id="text" class="form-control text-control" placeholder="Содержимое"><?=$res['text'];?></textarea>
              </div>
              <div class="d-flex align-items-center justify-content-center text-center">
                <input type="file" name="file" class="btn brand-btn w-50 mb-4" value="<?=$res['image'];?>">
                <button type="submit" id="editBtn" class="btn entry-btn w-50 mb-4">Сохранить</button> 
                <a href="/myarticles.php" type="submit" id="authBtn" class="btn disabl-btn w-30 mb-4">Отмена</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        <?php
            endif;
            while ($res = mysqli_fetch_assoc($query)):
        ?>
         <?php
            endwhile;
        ?>
  </div>
  <script src=" js/edit.js"></script>
</body>

</html>