<?php
session_start();
require("../rout_team.php");
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
  <script type="text/javascript" src="http://fondkd.ru/js/jquery-1.5.1.min.js"></script>
</head>
<body>
<?php include_once("../../forms/header.php");?>
<section class="team">
<div class="container">
<div class="team_team">
<div class="zagolovok"><strong> <?= $_SESSION['team']['name'] ?></strong> <div class="vstupit">
<?php
if($_SESSION['team']['name'] == $_SESSION['user']['team'])
 {
        echo '<a href="../leave.php"><button class="default-btnx" type="submit">Покинуть</button></a>
        <a href="../delete_team.php"><button class="default-btnx" type="submit">Удалить</button></a>';
   }
   ?>
                      
    </div></div>
<div class="teamcolon">
  <div class="item">

 Глава: <?= $_SESSION['team']['glava'] ?><br>
 Рейтинг: <?= $_SESSION['team']['raiting'] ?><br>
 Описание: <?= $_SESSION['team']['opisanie'] ?><br>
 Участники: 
 <?php
 $result = $connect->query('SELECT * FROM `users` WHERE team = "'.$_SESSION['team']['name'].'"'); // запрос на выборку
 while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
 {
        echo '<li>
        <h2> '.$row['login'].' </h2></li><br>';
   }
   ?>
  </div>
</div>
</div>

</div>
</section>
<section>
  <div class="commentarii">
  <div class="container">
    <div class="comms">
    <?php
$result = $connect->query('SELECT * FROM `msg` WHERE id_team= '.$_SESSION['team']['id'].'' ); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
                echo '<br>';
        echo '<li><h2> '.$row['id_user'].' </h2></li><li>'.$row['message'].'</li>';
        
   }
    ?>
    
    </div>
    
<div class="add_comment">
<form action="../../addtms.php" method="POST">
                        <textarea placeholder="Message" name="msg" class="textik"></textarea>
                      <button class="default-btnx" type="submit" >Отправить</button>
</form>
</div>
  </div>
  </div>
</section>
<div class="wrapper">

<div class="content"></div>

<div class="footer">email:pyromeday@gmail.com</div>

</div>
        <script src="js/script.js"></script>
    </body>
    </html>