<?php
session_start();
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/slick.css">
  <link rel="stylesheet" href="/css/slider.css">
  <link rel="stylesheet" href="/css/jquery.fancybox.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<?php include_once("../forms/header.php");?>
<section class="kolonka">
          <div class="container">
          <div class="kolonka__item">
              <div class="main__kolonka">
              <div class="levo">
                  
<?php
$result = $connect->query('SELECT * FROM `teams`'); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
        echo '<li><a href="catalog/udal_teams.php/'.$row['id'].'">
        <h2> '.$row['name'].' </h2></a></li><br>';
   }
    ?>
            </div>
          </div>
          </div>
  </div>
        </section>
        
        <div class="wrapper">

	<div class="content"></div>

	<div class="footer">email:pyromeday@gmail.com</div>

</div>
</body>
    </body>
    </html>