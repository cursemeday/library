<?php
session_start();
require("php/connection.php");
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
<?php include_once("forms/header.php");?>
<?php
if(isset($_SESSION['user'])): ?>
<?php if($_SESSION['user']['role'] == 'admin'): ?>
      <div class="panel">
        <div class="panel_items">
              <a class="menu-categories__link" href="/forms/addnews.php">Добавить новость</a>
              <a class="menu-categories__link" href="/php/deletenews.php">Удалить новость</a>        
        </div>
      </div>
      <?php endif; ?><?php endif; ?>
    <section class="sslider">
        <div class="slider">
            <div class="item">
                <img src="/img/slide1.png" alt="Первый слайд">
                <figcaption>Библиотека авторских книг</figcaption>
            </div>
            <div class="item">
                <img src="/img/slide2.png" alt="Второй слайд">
                <figcaption>Собирайтесь в команды</figcaption>
            </div>
            <div class="item">
                <img src="/img/slide3.png" alt="Третий слайд">
                <figcaption>И публикуйте свои произведения</figcaption>
            </div>
        </div>
        <div>
          <span class="slider-dots_item active" onclick="currentSlide(1)"></span>
          <span class="slider-dots_item" onclick="currentSlide(2)"></span>
          <span class="slider-dots_item" onclick="currentSlide(3)"></span>
          <span class="slider-dots_item" onclick="currentSlide(4)"></span>
        </div>
        </section>

<div class="container">
<section class="grid">
<?php
$result = $connect->query('SELECT * FROM `news`'); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
        echo '
   
    <article class="grid-item">
        <div class="image">
        <img src="img/punk.jpg" />
        </div>
        <div class="info">
            <h2>'.$row['name'].'</h2>
            <div class="info-text">
                <p>'.$row['novost'].'</p>
            </div>
            <div class="button-wrap">
                <a class="atuin-btn" href="#link">Подробнее</a>
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
        <script src="js/script.js">
      </script>
      <script type="text/javascript">
    btn = document.create('BUTTON');
    btn.class='btnbtn';
btn.onclick=function(){
    alert("btn");
}
btn.TextContent='111';
document.body.appendChild(btn);</script>
    </body>
    </html>