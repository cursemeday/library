<?php
session_start();
require("connection.php");

$login = $_SESSION['book']['author'];

$query = "SELECT * FROM users WHERE login ='$login'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count == 1){
  $clients = mysqli_fetch_assoc($result);
  $_SESSION['client'] = array(
    'id' => $clients['id'],
    'login' => $clients['login'],
    'password' => $clients['password'],
    'email' => $clients['email'],
    'role' => $clients['role'],
    'buys_books' => $clients['buys_books'],
    'money' => $clients['money'],
    'team' => $clients['team'],
    );
}
else{
  echo "Error";
}
?>