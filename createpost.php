<!DOCTYPE html>
<html lang="ru">
<?php
$title = "Coffee Chan | Написать статью";
include 'includes/head.php';
?>

<body class="blog-bg">
  <div class="container">
    <?php include 'includes/header.php'; ?>
    <div class="d-flex justify-content-center">
      <div class="card-box" style="width: 50rem">
        <div class="row align-items-center justify-content-center mx-0 my-5">
          <div class="col-lg-9">
            <div class="card-body text-center pb-5">
              <h3>Написать статью</h3>
            </div>
            <?php
            include_once 'includes/createpost.php';
            ?>
            <form method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="caption" class="mb-1 px-3">Введите заголовок</label>
                <input type="text" name="title" id="title" class="form-control-entry" placeholder="Заголовок">
              </div>
              <div class="mb-3">
                <label for="category" class="mb-1 px-3">Выберите категорию</label>
                <select class="form-select" aria-label="Default select example">
                  <option type="category" name="category" id="category" selected>Категория</option>
                  <option value="1">Интересные истории</option>
                  <option value="2">Рецепты кофе</option>
                  <option value="3">Советы по приготовлению</option>
                  <option value="3">Кофе и здоровье</option>
                </select>
              </div>
              <div class="mb-4">
                <textarea name="text" id="text" class="form-control text-control" placeholder="Содержимое"></textarea>
              </div>

              <div class="d-flex align-items-center justify-content-center text-center">
                <div id="picLoad" class="btn brand-btn w-30 mb-4" onclick="getFile()">Загрузите картинку</div>
                <div style='height: 0px;width: 0px; overflow:hidden;'><input id="file" type="file" value="upload" onchange="sub(this)" /></div>
                <button type="submit" class="btn entry-btn w-50 mb-4">Написать статью</button>
                <a href="/myarticles.php" type="submit" class="btn disabl-btn w-30 mb-4">Отмена</a>
              </div>
            </form>
            <?php
            if (isset($_FILES['file'])) {
              $check = can_upload($_FILES['file']);
              if ($check === true) {
                make_upload($_FILES['file'], $_POST['text'], $_POST['title'], $_POST['category'], $_POST['author']);
              } else {
                echo "<strong>$check</strong>";
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function getFile() {
      document.getElementById("file").click();
    }

    function sub(obj) {
      var file = obj.value;
      var fileName = file.split("\\");
      document.getElementById("picLoad").innerHTML = fileName[fileName.length - 1];
      document.myForm.submit();
      event.preventDefault();
    }
  </script>

</body>

</html>