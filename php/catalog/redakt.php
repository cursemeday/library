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
<?php include_once("../../forms/header.php");?>
<section class="auf">
          <div class="obratnaya">
          <form name="formochka" action="reduct.php" method="post" id="form_message">
		<h2>Редактирование профиля <?= $_SESSION['client']['login'] ?></h2>
		<p> <div class="ustal"><div class="titles">Логин </div> <input class="area1" name="log" type="text"/></div> </p> 
		<p> <div class="titles">Почта</div> <input class="area1" name="mail" type="text"/> </p>
		 
		<p> <div class="titles">Роль</div><input class="area1" name="role" type="text" /></p>
		<p><button class="default-btnx" type="submit" >Редактировать</button></p>
	</form>
          </div>
        </section>