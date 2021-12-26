<?php
session_start();
require("connection.php");
$daa = $_SESSION['book']['id'];
$msg = htmlspecialchars (trim ($_POST['msg']));
$author = $_SESSION['user']['login'];
$stranica = $_SESSION['book']['id'];


$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `messages` (`message`, `author`, `stranica`)
 VALUES ('$msg', '$author', '$stranica')");

$mysql->close();
header('Location: catalog/page.php/'.$daa.'');