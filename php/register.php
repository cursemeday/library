<?php
session_start();
$email = htmlspecialchars (trim ($_POST['email']));
$login = htmlspecialchars (trim ($_POST['login']));
$password = htmlspecialchars (trim ($_POST['password']));
$kolvo = strlen($password);

if($kolvo > 5){
    $password = md5($password);
$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `users` (`email`, `login`, `password`, `role`)
 VALUES ('$email', '$login', '$password', 'user')");
$mysql->close();
header('Location: ../forms/uspeh.php');
}
if($kolvo < 5){
    $_SESSION['reg'] = 'Пароль должен содержать от 5 до 13 символов';
    header('Location: ../forms/register.php');
}

