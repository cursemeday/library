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
                  Зарегистрироваться
                </div>
                <div class="form__text">
                 
                </div>
              </div>
              <div class="form__box">
                <form action="/php/register.php" method="POST">
                  <div class="form__box-inner">
                    <div class="form__box-left">
                        <input type="email" name="email" class="area1" placeholder="email">
                        <input type="text" name="login" class="area1" placeholder="Login">
                        <input type="password" name="password" class="area1" placeholder="Password">
                      <button class="default-btn" type="submit">Зарегистрироваться</button>
                      
                    </div>
                    
                  </div>
                  
                </form>
                
              </div>
              <?php if(isset($_SESSION['reg'])){
              echo '<p class="darova"> ' .$_SESSION['reg'] . '
            </p>';
              } 
              unset($_SESSION['reg']);
              ?>
          </div>
            </div>
            
            
          <label></label>
        </div>
      </section>
      <div class="wrapper">

<div class="content"></div>

<div class="footer">email:pyromeday@gmail.com</div>

</div>
    </body>
    </html>