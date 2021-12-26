<?php
session_start();
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
  <?php include_once("header.php");?>
    <section class="form">
        <div class="container">
          <div class="form__inner">
            <div class="form__content">
              <div class="form__title-box">
                <div class="form__title">
                Добавить кеша
                </div>
                <div class="form__text">
                 
                </div>
              </div>
              <div class="form__box">
                <form action="/php/addcash.php" method="POST">
                  <div class="form__box-inner">
                    <div class="form__box-left">
                      <label>
                        Сколько
                        <input type="number" name="moneta" class="area1">
                      </label>
                      <button class="default-btn" type="submit">Пополнить</button>
                    </div>
                    
                  </div>
                </form>
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
    </html>