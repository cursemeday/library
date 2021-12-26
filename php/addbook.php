<?php
session_start();
$name = htmlspecialchars (trim ($_POST['name']));
$janr = htmlspecialchars (trim ($_POST['janr']));
$opisanie = htmlspecialchars (trim ($_POST['opisanie']));
$author = $_SESSION['user']['login'];
$money = htmlspecialchars (trim ($_POST['denejki']));

$path = 'uploads/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
    $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    header('Location: /index.php');
}
$kniga = 'books/' . time() . $_FILES['kniga']['name'];
if (!move_uploaded_file($_FILES['kniga']['tmp_name'], $kniga)) {
    $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    header('Location: /index.php');
}

$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `books` (`name`, `janr`, `avatar`, `author`, `opisanie`, `kniga`, `price`)
 VALUES ('$name', '$janr', '$path', '$author', '$opisanie', '$kniga', '$money')");

$mysql->close();
header('Location: catalog.php');
?>
