<?php
require("connection.php");
$news = htmlspecialchars (trim ($_POST['news']));
$nmnw = htmlspecialchars (trim ($_POST['nmnw']));


$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `news` (`name`, `novost`)
 VALUES ('$nmnw', '$news')");

$mysql->close();
header('Location: /');