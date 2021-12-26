<?php
session_start();

require("../connection.php");

$dengi = $_SESSION['user']['money'];
$nomer = $_SESSION['user']['id'];
$daa = $_SESSION['book']['id'];
$bp = $_SESSION['book']['price'];
$cashik = $dengi - $bp;
$author = $_SESSION['book']['author'];
$_SESSION['user']['money'] = $cashik;

$query = "UPDATE users SET money='$cashik' WHERE id='$nomer'";
$connect->query($query);
$mysql= "INSERT INTO buys_books (`id_users`, `id_books`)
VALUES ('$nomer', '$daa')";
$connect->query($mysql);
$opana = "UPDATE users SET money=`money` + $bp WHERE login='$author'";
$connect->query($opana);
header('Location: page.php/'.$daa.'');
?>
