<?php
session_start();
require("connection.php");
$msg = htmlspecialchars (trim ($_POST['msg']));
$author = $_SESSION['user']['login'];
$stranica = $_SESSION['team']['id'];


$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `messages` (`message`, `id_user`, `id_team`)
 VALUES ('$msg', '$author', '$stranica')");

header('Location: /');