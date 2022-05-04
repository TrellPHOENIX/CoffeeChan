<?php
    require "connect.php";

    $name = ($_POST['name']);
    $login = ($_POST['login']);
    $password = $_POST['password'];

    $error = '';
    if (strlen($login) < 3) $error = "Имя должно содержать не менее 3 символов";
    else if (strlen($login) < 5) $error = "Логин должен содержать не менее 5 символов";
    else if (strlen($password) < 5) $error = "Пароль должен содержать не менее 5 символов";
    else if (mysqli_num_rows($connection -> query("SELECT * FROM `users` WHERE `login` = '$login'")) != 0) $error = "Такой логин уже занят";

    if ($error) {
        echo $error;
        exit();
    }

    $hash = 'hdbhsgtjdnlksdcc&';
    $password = md5($password.$hash);

    $connection -> query("INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$name', '$login', '$password')");
    header('location: /auth.php');