<?php
session_start();
require("../connection.php");
$nazv = $_SESSION['user']['login'];
$naz = $_SESSION['team']['name'];
$null = null;
                  $query = "UPDATE users SET team = '$null' WHERE login ='$nazv'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$query = "UPDATE teams SET glava = '$null' WHERE name ='$naz'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$_SESSION['user']['team'] = $null; 
header('Location: ../teams.php');
   ?>