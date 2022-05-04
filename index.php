<!DOCTYPE html>
<html lang="ru">

<?php
$title = "Coffee Chan";
include 'includes/head.php';
?>

<body class="main-bg">
  <div class="container">
    <?php include 'includes/header.php'; ?>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class=" col-10 col-sm-8 col-lg-6">
        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
          <img src="assets/img/person-1.png" class="d-block mx-lg-auto img-fluid" alt="Person-1" width="450" loading="lazy">
        </div>
      </div>
      <div class="col-lg-5">
        <div class="wow bounceIn" data-wow-duration="2s" data-wow-delay="0s">
          <h1 class="display-6 fw-bold lh-1 mb-3">Ты здесь, потому что любишь <span class="tagline-1">кофе</span>, мы
            здесь, потому что <span class="tagline-2">любим</span> тебя.
          </h1>
        </div>
        <div class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">
          <p class="lead col-md-11">Кофе — это удивительный напиток, обладающий неповторимым ароматом и вкусом,
            наполняющий
            бодростью и огромной внутренней
            энергией. Поделись с нами своими мыслями о кофе.</p>
        </div>
        <? if ($_COOKIE['log'] == $res['author']) : ?>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start t-d-none">
              <a href="/auth.php" type="button" class="btn-article btn-lg px-4 me-md-2"><span>Написать статью</span></a>
            </div>
          </div>
        <? else : ?>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start t-d-none">
              <a href="/createpost.php" type="button" class="btn-article btn-lg px-4 me-md-2"><span>Написать статью</span></a>
            </div>
          </div>
        <? endif; ?>
        <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2s">
          <hr>
        </div>
        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="3s">
          <p class="my-3 link-artics">Прочитайте уже существующие <a href="#">статьи.</a></p>
        </div>
      </div>
    </div>
    <footer class="px-4 py-5 text-center text-white bg-mt">
      <div class="wow bounceIn" data-wow-duration="2s" data-wow-delay="0s">
        <h1 class="display-6 fw-bold">Вы говорите «<span class="tagline-1">кофе</span>». Я говорю «<span class="tagline-2">любовь</span>»</h1>
      </div>
      <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
        <p class="lead mb-4">Если у вас есть какие-либо вопросы, пожалуйста, заполните <br> эту контактную форму.
          Спасибо!
        </p>
      </div>
      <div class="row align-items-center justify-content-around">
        <div class="col-10 col-sm-8 col-lg-3 text-start">
          <div class="footer-contacts">
            <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
              <p class="footer-subtitle">Наши контакты:</p>
            </div>
            <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2s">
              <div class="footer-contact footer-contact-address">
                <p class="footer-name">Адрес</p>
                <a href="https://yandex.kz/maps/" target="_blank" class="footer-value">a пр. Абая, 109 В, ТРЦ Globus, 1 этаж</a>
              </div>
            </div>
            <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2.2s">
              <div class="footer-contact footer-contact-phone">
                <p class="footer-name">Номер телефона</p>
                <a href="tel:+77473803078" class="footer-value">+ 7 747 380 30 78</a>
              </div>
            </div>
            <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2.3s">
              <div class="footer-contact footer-contact-email">
                <p class="footer-name">Email</p>
                <a href="mailto:anabellaistomina4@gmail.com" class="footer-value">anabellaistomina4@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2.6s">
            <hr>
          </div>
          <div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2.6s">
            <div class="socials">
              <div class="social"><img src="/assets/img/icons/instagram.svg" alt="instagram"></div>
              <div class="social"><img src="/assets/img/icons/twitter.svg" alt="twitter"></div>
              <div class="social"><img src="/assets/img/icons/facebook.svg" alt="facebook"></div>
              <div class="social"><img src="/assets/img/icons/vk.svg" alt="vk"></div>
            </div>
          </div>
        </div>
        <div class="col-10 col-sm-8 col-lg-4">
          <div class="wow bounceInRight" data-wow-duration="2s" data-wow-delay="1.5s">
            <form action="/includes/message.php" name="messages" method="POST">
              <?php if (!empty($response)) { ?>
                <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
                  <?php echo $response['message']; ?>
                </div>
              <?php } ?>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="Введите ваш Email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <textarea class="form-control text-control" name="message" id="message" placeholder="Введите ваше сообщение" aria-label="text-textarea"></textarea>
              </div>
              <div class="d-grid d-md-flex justify-content-md-start">
                <button type="submit" name="send" value="Send" class="footer-btn btn-lg">Отправить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    $(function() {
      $("form[name='messages']").validate({
        // Би-бум... Определить правила проверки
        rules: {
          email: "required",
          message: "required",
          email: {
            required: true,
            email: true
          },
          message: {
            required: true
          }
        },
        // Укажите сообщения об ошибках проверки
        messages: {
          email: {
            required: "Укажите свой E-mail",
            minlength: "Укажите корректный E-mail",
            email: "Введите действительный E-mail"
          },
          message: "Введите ваше сообщение"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
  </script>
</body>

</html>