<?php
include 'accessDB.php';

//Функция проверки авторизован пользователь или нет
function isUser(){
	return isset($_COOKIE['autorization']);
}

function getUser(){
	return $_COOKIE['autorization'];
}
//Если пользователь не авторизован мы его перебросим на форму авторизации

if(!isUser()){
	header('Location: /regictrtion.php');
	exit; 
}
?>
<h1>Привет, <?php echo getUser(); ?>!</h1>
<a href="/logout.php">Выход</a>

