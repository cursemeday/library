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
<section class="svyaz">
          <div class="obratnaya">
          <form name="formochka" action="mail.php" method="post" id="form_message">
		<h2>Связаться с нами</h2>
		<p> <div class="ustal"><div class="titles">Ваше имя*</div> <input class="input" name="name" type="text"/></div> </p>
		 
		 
		<p> <div class="titles">Тема сообщения</div> <input class="input" name="subjects" type="text"/> </p>
		 
		<p> <div class="titles">Текст сообщения:</div><textarea name="message" cols="22" rows="5" /></textarea></p>
		<p><button class="default-btnx" type="submit" >Отправить</button></p>
	</form>
          </div>
        </section>
        <div class="wrapper">

	<div class="content"></div>

	<div class="footer">email:pyromeday@gmail.com</div>

</div>
        <script src="/js/script.js"></script>
    </body>
    </html>