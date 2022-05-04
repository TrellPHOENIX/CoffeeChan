<?php
    require "connect.php";

    $login = $_COOKIE['log'];
    $article_id = $_GET['id'];

    $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$article_id'");

    if ($query) {
        $connection -> query("DELETE FROM `articles` WHERE `id` = '$article_id'");
    }

    header('location: /myarticles.php');