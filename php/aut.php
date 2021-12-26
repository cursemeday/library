<?php
session_start();
require("connection.php");

if(isset($_POST['login']) && isset($_POST['password'])){
$login = htmlspecialchars (trim ($_POST['login']));
$password = htmlspecialchars (trim ($_POST['password']));
$password = md5($password);

$query = "SELECT * FROM users WHERE login ='$login' and password='$password'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count == 1){
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user'] = array(
    'id' => $user['id'],
    'login' => $user['login'],
    'password' => $user['password'],
    'email' => $user['email'],
    'role' => $user['role'],
    'buys_books' => $user['buys_books'],
    'money' => $user['money'],
    'team' => $user['team'],
    );
    header('Location: ../forms/vhodpz.php');
}
else{
  header('Location: ../forms/neuspeh.php');
}
}
?>