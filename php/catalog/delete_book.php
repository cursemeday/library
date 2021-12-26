<?php
session_start();
require("../connection.php");
$nazv = $_SESSION['book']['name'];
                  $query = "DELETE FROM books WHERE name = '$nazv'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
header('Location: ../catalog.php');
   ?>