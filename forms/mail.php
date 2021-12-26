<?php
$to = "<pyromeday@gmail.com>";
$name = $_POST['name'];
$subjects = $_POST["subjects"];
$message = $_POST["message"];
 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
if (!empty($name) && !empty($subjects) && !empty($message)) {
$result = mail($to, $subjects, $message, $headers);
}	
if ($result) {
    header('Location: ../index.php');
}else{
    header('Location: ../index.php');
}
?>