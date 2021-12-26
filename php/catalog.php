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
              <a class="menu-categories__link" href="/forms/kniga.php">Добавить книгу</a>     
        </div>
      </div>
      <?php endif; ?>
      
<div class="container">
  <div class="dve_storoni">
  <div class="levaya_storona">
  <div class="booksload">
<?php
 
if( isset( $_POST['vc'] ) )
{
    switch( $_POST['vc'] )
    {
        case 'q1':
          $result = $connect->query('SELECT * FROM `books` WHERE janr = "Романтика"'); // запрос на выборку
          while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
          {
            echo '<div class="item">
            <figure>
      <img src='.$row['avatar'].' alt="asd" class="fgr">
    <figcaption><a href="catalog/page.php/'.$row['id_book'].'">'.$row['name'].' </a></figpcation>
    </figure></div>';
       }
            break;
        case 'q2':
          $result = $connect->query('SELECT * FROM `books` WHERE janr = "Фантастика"'); // запрос на выборку
          while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
          {
            echo '<div class="item">
            <figure>
      <img src='.$row['avatar'].' alt="asd" class="fgr">
    <figcaption><a href="catalog/page.php/'.$row['id_book'].'">'.$row['name'].' </a></figpcation>
    </figure></div>';
       }
            break;
        case 'q3':
          $result = $connect->query('SELECT * FROM `books`WHERE janr = "Драма"'); // запрос на выборку
          while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
          {
            echo '<div class="item">
            <figure>
      <img src='.$row['avatar'].' alt="asd" class="fgr">
    <figcaption><a href="catalog/page.php/'.$row['id_book'].'">'.$row['name'].' </a></figpcation>
    </figure></div>';
       }
            break;
    }
}
else{
$result = $connect->query('SELECT * FROM `books`'); // запрос на выборку
                while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
	{
        echo '<div class="item">
        <figure>
	<img src='.$row['avatar'].' alt="asd"  class="fgr">
<figcaption><a href="catalog/page.php/'.$row['id_book'].'">'.$row['name'].' </a></figpcation>
</figure></div>';
   }
  }
    ?>
    </div>
</div>
<div class="pravaya_storona">
  <div class="filterss">
          <form method="post">   
          <p>Фильтры</p>  
        <label>Романтика
  <input type="radio" name="vc" value="q1" checked/>
  <span></span>
</label>
<label>Фантастика
  <input type="radio" name="vc" value="q2" />
  <span></span>
</label>
<label>Драма
  <input type="radio" name="vc" value="q3" />
  <span></span>
</label>
            <button name="send" class="btnbtn" type="submit">Применить</button>
          

          </form>
</div>
</div>
                    </div>
                    </div>
              </div>
</div>
<div class="wrapper">

	<div class="content"></div>

	<div class="footer">email:pyromeday@gmail.com</div>

</div>

</body>
</html>