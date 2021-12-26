<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));

$current_page = $db->select('SELECT * FROM `pages` WHERE `url` = ?', [$uri])->first();

// Если статьи нет - показываем ошибку
if(!$current_page)
    require 'pages/404.php';
// Если статья есть - подключаем шаблон, в котором будет доступна переменная $current_page
else
    require 'pages/article.php';