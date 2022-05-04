        <?php
        require('connect.php');
        // б-бип... подключаем и устанавливаем соединение с БД
        if (!empty($_POST["send"])) {
          $email = $_POST["email"];
          $message = $_POST["message"];
          // Электронная почта получателя
          $toMail = "example@gmail.com";
          // Создать заголовок электронной почты
          $header = "From: " . $name . "<" . $email . ">\r\n";
          // Отправить
          if (mail($toMail, $message, $header)) {
            // Хранить данные отправителя в базе данных
            $sql = $connection->query("INSERT INTO messages(email, message, message_date) VALUES ('{$email}', '{$message}', now())");
            if (!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "We have received your query and stored your information. We will contact you shortly."
              );
            }
          } else {
            $response = array(
              "status" => "alert-danger",
              "message" => "Message coudn't be sent, try again"
            );
          }
        }
        ?>