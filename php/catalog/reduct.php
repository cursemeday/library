<?php
session_start();
require("../connection.php");
$log = htmlspecialchars (trim ($_POST['log']));
$mail = htmlspecialchars (trim ($_POST['mail']));
$role = htmlspecialchars (trim ($_POST['role']));
$login = $_SESSION['client']['login']; 
$query = "UPDATE users SET login='$log', email='$mail', role='$role' WHERE login ='$login'";
$connect->query($query);
$query = "UPDATE books SET author='$log' WHERE author ='$login'";
$connect->query($query);
$_SESSION['client']['login'] = $log;
$_SESSION['client']['role'] = $role;
$_SESSION['client']['email'] = $mail;

header('Location: redakt.php');