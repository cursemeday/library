<?php
session_start();
require("../php/connection.php");
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
<?php
if(isset($_SESSION['user'])): ?>

      <div class="panel">
        <div class="panel_items">
              <a class="menu-categories__link" href="/forms/addteam.php">Создать команду</a>
   
        </div>
      </div>
      <?php endif; ?>   
      <section class="kolonka">
          <div class="container">
          <div class="kolonka__item">
              <div class="main__kolonka">
              
<?php
$result = $connect->query('SELECT * FROM `teams`'); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{

        echo '<div class="team_block"><div class="team_cont"><div class="team_title"><a href="catalog/page_team.php/'.$row['id'].'"><b> '.$row['name'].' </b></a></div><li>'.$row['glava'].'</li>
        <li>'.$row['opisanie'].'</li>
        <li>Рейтинг: '.$row['raiting'].'</li></div></div>';    
   }
    ?>
            
          </div>
          </div>
        </section>
<div class="wrapper">

	<div class="content"></div>

	<div class="footer">email:pyromeday@gmail.com</div>

</div>

</body>
</html>