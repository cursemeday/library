<?php
session_start();
require("../connection.php");
                  $uri =$_SERVER['REQUEST_URI'];
                  $segments = explode('/', trim($uri, '/'));
                  

                  $query = "DELETE FROM news WHERE id = '$segments[3]'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));

header('Location: /');
   ?>