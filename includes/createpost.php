<?php

  function can_upload($file){
    if($file['name'] == '')
		return 'Вы не выбрали файл.';

	$getMime = explode('.', $file['name']);
	$mime = strtolower(end($getMime));
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	return true;
  }
  
  function make_upload($file, $text, $title, $category, $author){	
		require "connect.php";

	$name = mt_rand(0, 5) . $file['name'];
	copy($file['tmp_name'], 'image/' . $name);
	$filename ='image/' . $name;

	$connection -> query("INSERT INTO `articles` (`title`, `category`, `text`, `author`, `image`, `pubdate`) VALUES ('$title', '$category', '$text', 'author', '$filename', now())");
  }
