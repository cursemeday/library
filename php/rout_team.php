<?php
session_start();
require("connection.php");
                  $uri =$_SERVER['REQUEST_URI'];
                  $segments = explode('/', trim($uri, '/'));
                  

                  $query = "SELECT * FROM teams WHERE id ='$segments[3]'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count == 1){
  $teams = mysqli_fetch_assoc($result);
  $_SESSION['team'] = array(
    'id' => $teams['id'],
    'name' => $teams['name'],
    'raiting' => $teams['raiting'],
    'opisanie' => $teams['opisanie'],
    'glava' => $teams['glava'],
    );
}
else{
  echo "Error";
}
                  ?>