<?php
session_start();
require("../php/connection.php");
$nazvanie = htmlspecialchars (trim ($_POST['dreamteam']));
$glavniy = $_SESSION['user']['login'];
$chel = $_SESSION['user']['id'];
$opisanie = htmlspecialchars (trim ($_POST['pisanina']));

$mysql = new mysqli('127.0.0.1', 'root', 'root', 'library');
$mysql->query("INSERT INTO `teams` (`name`, `glava`, `opisanie`, `raiting`)
 VALUES ('$nazvanie', '$glavniy', '$opisanie', '0')");
$query = "SELECT * FROM teams WHERE name ='$nazvanie'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);
if($count == 1){
$daqwe = mysqli_fetch_assoc($result);
$_SESSION['daqwe'] = array(
'id' => $daqwe['id'],
 'glava' => $daqwe['glava'],
'opisanie' => $daqwe['opisanie'],
     );
     $chid = $_SESSION['daqwe']['id'];
$mysql= "INSERT INTO teams_history (`id_user`, `id_team`)
VALUES ('$chel', '$chid')";
$connect->query($mysql);
$opachki = "UPDATE users SET team='$nazvanie'  WHERE login='$glavniy'";
$connect->query($opachki);
$_SESSION['user']['team'] = $nazvanie;
 }
 header('Location: ../php/teams.php');
