<?php include("connect.php");
header("Content-type: text/html; charset=UTF-8");
if(empty($_POST['js'])){
if($_POST['message'] != '' && $_POST['author'] != ''){
$author = @iconv("UTF-8", "UTF-8", $_POST['author']);
$author = addslashes($author);
$author = htmlspecialchars($author);
$author = stripslashes($author);
$author = mysql_real_escape_string($author);
$message = @iconv("UTF-8", "UTF-8", $_POST['message']);
$message = addslashes($message);
$message = htmlspecialchars($message);
$message = stripslashes($message);
$message = mysql_real_escape_string($message);

$stranica = @iconv("UTF-8", "UTF-8", $_POST['stranica']);
$stranica = addslashes($stranica);
$stranica = htmlspecialchars($stranica);
$stranica = stripslashes($stranica);
$stranica = mysql_real_escape_string($stranica);

$date = date("d-m-Y в H:i:s");

$result = mysql_query("INSERT INTO messages (author, message, stranica, date) VALUES ('$author', '$message', '$stranica', '$date')");
if($result == true){echo 0;
}else{echo 1;}
}else{echo 2;}}

if($_POST['js'] == 'no'){
if($_POST['message'] != '' && $_POST['author'] != ''){

$author = $_POST['author'];
$author = addslashes($author);
$author = htmlspecialchars($author);
$author = stripslashes($author);
$author = mysql_real_escape_string($author);

$message = $_POST['message'];
$message = addslashes($message);
$message = htmlspecialchars($message);
$message = stripslashes($message);
$message = mysql_real_escape_string($message);

$stranica = $_POST['stranica'];
$stranica = addslashes($stranica);
$stranica = htmlspecialchars($stranica);
$stranica = stripslashes($stranica);
$stranica = mysql_real_escape_string($stranica);

$date = date("d-m-Y в H:i:s");

$result = mysql_query("INSERT INTO messages (author, message, stranica, date) VALUES ('$author', '$message', '$stranica', '$date')");
if($result == true){echo "";
}else{echo "";}
}else{echo "";}}
?>