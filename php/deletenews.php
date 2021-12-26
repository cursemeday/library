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
<div class="container">
<section class="grid">
    <?php
$result = $connect->query('SELECT * FROM `news`'); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
        echo '
   
    <article class="grid-item">
        <div class="image">
        <img src="../img/punk.jpg" />
        </div>
        <div class="info">
            <h2>'.$row['name'].'</h2>
            <div class="info-text">
                <p>'.$row['novost'].'</p>
            </div>
            <div class="button-wrap">
                <a class="atuin-btn" href="catalog/dlt.php/'.$row['id'].'">Удалить новость</a>
            </div>
        </div>
    </article>';
  }
  ?>
</section>
  </div>
        
        <div class="wrapper">

	<div class="content"></div>

	<div class="footer">email:pyromeday@gmail.com</div>

</div>
</body>
    </body>
    </html>