<?php
session_start();
require("connection.php");
                  $uri =$_SERVER['REQUEST_URI'];
                  $segments = explode('/', trim($uri, '/'));
                  

                  $query = "SELECT * FROM books WHERE id_book ='$segments[3]'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count == 1){
  $books = mysqli_fetch_assoc($result);
  $_SESSION['book'] = array(
    'id' => $books['id_book'],
    'name' => $books['name'],
    'author' => $books['author'],
    'opisanie' => $books['opisanie'],
    'avatar' => $books['avatar'],
    'kniga' => $books['kniga'],
    'janr' => $books['janr'],
    'price' => $books['price'],
    );
}
else{
  echo "Error";
}
                  ?>