<?php
session_start();
require("../connection.php");
$nazv = $_SESSION['team']['name'];
                  $query = "DELETE FROM teams WHERE name = '$nazv'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
header('Location: ../teams.php');
   ?>