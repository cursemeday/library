<?php
session_start();
require("connection.php");
$bolshiedengi = htmlspecialchars (trim ($_POST['moneta']));
$summadeneg = $bolshiedengi + $_SESSION['user']['money'];
$nomer = $_SESSION['user']['id'];

$query = "UPDATE users SET money='$summadeneg' WHERE id='$nomer'";
$connect->query($query);
$_SESSION['user']['money'] = $summadeneg;
header('Location: /');
?>