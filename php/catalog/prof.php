<?php
session_start();
require("../profcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/slick.css">
  <link rel="stylesheet" href="../../css/slider.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php include_once("../../forms/header.php");?>
    <section class="form">
        <div class="container">
          <div class="form__inner">
            <div class="form__content">
              <div class="form__title-box">
                <div class="form__title">
                  Профиль
                </div>
                <div class="form__text">
                 
                </div>
              </div>
              <div class="form__box">
                <form action="redakt.php" method="POST">
                  <div class="form__box-inner">
                    <div class="form__box-left">
                      <label>
                      Login: <?= $_SESSION['client']['login'] ?>
                      </label>
                      <label>
                      Role: <?= $_SESSION['client']['role'] ?>
                      </label>
                      <label>
                      Mail: <?= $_SESSION['client']['email'] ?>
                      </label>
                      <label>
                      Team: <?= $_SESSION['client']['team'] ?>
                      </label>
                      <label>
                      <button class="default-btnx" type="submit">Редактировать</button>
                      </label>
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