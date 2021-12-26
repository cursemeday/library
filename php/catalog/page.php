<?php
session_start();
require("../rout.php");
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
<section class="pageboocake">
<div class="pagebook">
<div class="zagolovok"><h1> <?= $_SESSION['book']['name'] ?></h1></div>
<div class="pagecolon">
  <div class="item">
 <img src="../../<?=$_SESSION['book']['avatar']?>" alt="asd" class="fgr1"></div>
 <div class="info">
   <p>
 Автор: <a href="../prof.php"> <?= $_SESSION['book']['author'] ?></a></p>
<p>
 Жанр: <?= $_SESSION['book']['janr'] ?>
</p>
 <p>
 Цена: <?= $_SESSION['book']['price'] ?> рублей
</p>
<?php
if($_SESSION['user']['login'] == $_SESSION['book']['author'])
 {
        echo '
        <a href="../delete_book.php"><button class="default-btnx" type="submit">Удалить</button></a>';
   }
   ?>
  </div>
  </div>
</div>
</div>
<div class="pagebook">
<div class="item2">
<?php
if(isset($_SESSION['user'])):
$login = $_SESSION['user']['id'];
$book = $_SESSION['book']['id'];
$query = "SELECT * FROM buys_books WHERE id_users ='$login' and id_books='$book'";
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
$count = mysqli_num_rows($result);
if($count == 1):
?>
<a href="../../open.php" target="_blank" class="btnbtn">Читать</a>
<?php else: ?>
  <li name="pokupka" ><form name="pokupka" action="../dabudi.php" method="POST"><button name="send" class="btnbtn" type="submit">купить</button></form>
</li>
<?php endif; ?>
<?php endif; ?>


  <li> <h1>Описание:</h1> <?= $_SESSION['book']['opisanie'] ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga debitis nostrum voluptatibus laborum minus, eum sunt porro maiores expedita qui, error quod, natus iure laboriosam quo iste quam accusantium! Deleniti.
                     Eligendi expedita maxime praesentium architecto est laborum voluptatum facere ipsam quod. Modi, harum! Omnis enim quas saepe ut eos et, aliquam architecto, libero molestiae sequi, tempora excepturi amet unde maxime.</li>
  </div>
  </div>
</section>
<section>
  <div class="commentarii">
  <div class="container">
    <div class="comms">
    <?php
$result = $connect->query('SELECT * FROM `messages` WHERE stranica= '.$_SESSION['book']['id'].'' ); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
                echo '<br>';
        echo '<div class="com"><figure>'.$row['author'].': <figcaption>'.$row['message'].'</figcaption></figure></div>';
        
   }
    ?>
    </div>
  <?php  if(isset($_SESSION['user'])): ?>

</form>
<div class="add_comment">
<form action="../../addmsg.php" method="POST">
<textarea placeholder="Message" class="textik" name="msg"></textarea>
                      <button class="default-btnx" type="submit">Отправить</button>
</form>
</div>
<?php endif; ?>
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