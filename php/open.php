<?php     
session_start();

// Сохраняем имя файла в переменной

$file = $_SESSION['book']['kniga'];

$filename = $_SESSION['book']['kniga'];

  
// Тип содержимого заголовка


header('Content-type: application/pdf');

  

header('Content-Disposition: inline; filename="' . $filename . '"');

  

header('Content-Transfer-Encoding: binary');

  

header('Accept-Ranges: bytes');

ob_clean();
flush();

@readfile($file);
?>