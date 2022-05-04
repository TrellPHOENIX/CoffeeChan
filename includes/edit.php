<?php
    require "connect.php";

    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $text = $_POST['text'];
    $image = $_POST['image'];
     
    // $error = '';
    // if (strlen($title) < 10) $error = "Заголовок должен содержать не менее 10 символов";
    // else if (strlen($text) < 30) $error = "Текст должен содержать не менее 30 символов";
    if ($error) {
        echo $error;
        exit();
    } else {
        $connection -> query("UPDATE `articles` SET `title` = '$title', `category` = '$category', `text` = '$text', `image` = '$filename'");
        header('location: /myarticles.php');
    }